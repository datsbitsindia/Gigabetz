'use strict';

var router = require('express').Router();

var AuthController = require('../controllers/authController'),
    UsersController = require('../controllers/usersController');

var APIRoutes = function () {

    router.post('/authenticateUser', AuthController.authenticateUser);
    router.post('/registerUser', UsersController.registerUser);

    //User
    router.post('/changePassword',  UsersController.change_password);
    router.post('/resetUserPassword', UsersController.reset_password);

    router.post('/addAccount', UsersController.addAccount);
    router.post('/getAccounts', UsersController.getAccounts);
    router.post('/userGeneratePoints', UsersController.userGeneratePoints);
    router.post('/userDeposit', UsersController.userDeposit);
    router.post('/userWithdrawRequest', UsersController.userWithdrawRequest);
    router.post('/userMinMaxOdds', UsersController.userMinMaxOdds);
    router.post('/userExposureLimit', UsersController.userExposureLimit);
    router.post('/userCreditReference', UsersController.userCreditReference);
    router.post('/userActiveAandBetStatus', UsersController.userActiveAandBetStatus);
    router.post('/userSportsAccess', UsersController.userSportsAccess);
    router.post('/usersBets', UsersController.usersBets);
    router.post('/getUsersBets', UsersController.getUsersBets);
    router.post('/getUsersBalance', UsersController.getUsersBalance);
    router.post('/getWithdrawalRequest', UsersController.getWithdrawalRequest);
    
    return router;
};

module.exports = {
    APIRoutes: APIRoutes,
};
