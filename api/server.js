'use strict';

// NPM dependencies.
var express = require('express'),
    bodyParser = require('body-parser'),
    passport = require('passport'),
    morgan = require('morgan');

var config = require('./app/config');

// Initializations.
var app = express();

// Parse as urlencoded and json.
app.use(bodyParser.urlencoded({ limit: '50mb', extended: true }));
app.use(bodyParser.json({ limit: '50mb', extended: true }));

// Hook up the HTTP logger.
app.use(morgan('dev'));

// Hook up Passport.
app.use(passport.initialize());

// Hook the passport JWT strategy.

app.all('*', function (req, res, next) {
    res.setHeader('Access-Control-Allow-Headers', 'X-Requested-With,content-type,Authorization ,Accept');
    res.setHeader('Access-Control-Allow-Origin', '*');
    res.setHeader('Access-Control-Allow-Credentials', true);
    res.setHeader('Access-Control-Expose-Headers', 'Authorization');
    res.setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, PATCH, DELETE');
    res.setHeader('Access-Control-Allow-Headers', 'X-Requested-With,content-type, Authorization');
    next();
});

// Set the static files location.
app.use(express.static(__dirname + '/public'));


// Bundle API routes.
app.use('/api', require('./app/routes/api').APIRoutes(passport));


var server = require('http').createServer(app);

// start app ===============================================
app.set('port', process.env.PORT || 9910); //9111  9910
server.listen(app.get('port'), function () {

    const sql = require('mssql');

    sql.connect(config.db).then((pool) => {
        console.log("DB Connected...!");
    }).then(result => {
        console.log(result)
    }).catch(err => {
        // ... error checks
        console.log(err)
    })
    console.log('Express server listening on port ' + app.get('port'));
});