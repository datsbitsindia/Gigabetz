'use strict';

var config = require('../config');
var jwt = require('jsonwebtoken');
var bCrypt = require('bcrypt');
// The authentication controller.
var AuthController = {};

AuthController.test = function (req, res) {
    res.send('Greetings from the Test controller!');
};

// Authenticate a user.
AuthController.authenticateUser = function (req, res) {

    if (!req.body.userName || !req.body.password) {
        res.status(404).json({ message: 'Username and password are needed!' });
    } else {

        var userName = req.body.userName.toLowerCase(),
            password = req.body.password;

        config.sql.connect(config.db).then(pool => {
            return pool.request()
                .input('UserName', config.sql.VarChar, userName)
                .execute('UserLogin')
        }).then(result => {
            
            if (result && result.recordset[0].UserID > 0) {
                var user = result.recordset[0];

                comparePasswords(password, user.Password, function (error, isMatch) {
                    
                    if (isMatch && !error) {

                        var token = jwt.sign(
                            { id: user.UserID },
                            config.keys.secret,
                            { expiresIn: '1440m' }
                        );
                        user.Password = null;

                        config.sql.connect(config.db).then(pool => {
                            return pool.request()
                                .input('UserID', config.sql.Int, user.UserID)
                                .execute('G_GetUsersBalance')
                        }).then(result1 => {
                            console.log(result1)
                            res.json({
                                success: true,
                                token: token, //'JWT ' + token,
                                user: user,
                                data: result1.recordset
                            });
                        }).catch(err => {
                            console.log(err)
                        });
                        
                    } else {
                        res.status(404).json({ success: false, message: 'Invalid Password!, Please reenter Password.' });
                    }
                });
            } else {
                res.status(404).json({ success: false, message: 'Invalid Username or Password!' });
            }
        }).catch(err => {
            res.status(500).json({ success: false, message: 'There was an error!', error: err });
        });

    }

}

// Compares two passwords.
function comparePasswords(password, hash, callback) {

    bCrypt.compare(password, hash, function (error, isMatch) {
        if (error) {
            return callback(error);
        }

        return callback(null, isMatch);
    });
}

module.exports = AuthController;
