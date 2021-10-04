var config = require('../config');
var bCrypt = require('bcrypt');

var registerUser = function (req, res) {
    var FullName = req.body.FullName;
    var UserName = req.body.UserName;
    var Email = req.body.Email;
    var PhoneNumber = req.body.PhoneNumber;
    var Password = req.body.Password;

    bCrypt.hash(Password, 10).then(function (hashPassword) {
        config.sql.connect(config.db).then(pool => {
            return pool.request()
                .input('FullName', config.sql.VarChar, FullName)
                .input('UserName', config.sql.VarChar, UserName)
                .input('Email', config.sql.VarChar, Email)
                .input('PhoneNumber', config.sql.VarChar, PhoneNumber)
                .input('Password', config.sql.VarChar, hashPassword)
                .input('RoleID', config.sql.Int, 3)
                .output('UserID', config.sql.Int)
                .execute('IU_Users');
        }).then(result => {
            console.log(result);
            if (result && result.output.UserID > 0) {
                res.json({
                    success: true,
                    message: 'User Registered Successfully.' //result.recordset[0].Msg
                });
            } else {
                res.status(404).json({ success: false, message: result.recordset[0].Msg });
            }
        }).catch(err => {
            console.log(err)
            res.status(500).json({ success: false, message: 'There was an error!', error: err });
        });
    });
};

var reset_password = function (req, res) {
    var UserID = req.body.UserID;
    var Password = req.body.Password;
    var TransctionCode = req.body.TransctionCode;
    var LoginUserID = req.body.LoginUserID;

    bCrypt.hash(Password, 10).then(function (hashPassword) {

        config.sql.connect(config.db).then(pool => {
            return pool.request()
                .input('UserID', config.sql.Int, UserID)
                .input('Password', config.sql.Decimal, hashPassword)
                .input('TransctionCode', config.sql.VarChar, TransctionCode)
                .input('LoginUserID', config.sql.Int, LoginUserID)
                .execute('U_UserPassword')
        }).then(result => {
            console.log(result)
            if (result && result.recordset[0].MsgStatus == 1) {
                res.json({
                    success: true,
                    message: result.recordset[0].Msg
                });
            } else {
                res.status(404).json({ success: false, message: result.recordset[0].Msg });
            }
        }).catch(err => {
            console.log(err)
            res.status(500).json({ success: false, message: 'There was an error!', error: err });
        });
    });
};

var update_user_profile = function (req, res) {
    var userId = req.body._id;

    User.findOne({ _id: userId }).then(function (objUserExist) {
        User.updateOne(
            { _id: userId },
            {
                displayName: req.body.displayName,
                firstName: req.body.firstName,
                lastName: req.body.lastName,
                mobileNo: req.body.mobileNo,
            }
        ).then(function (response) {
            if (response.ok) {

                res.json({ success: true, message: "Profile updated successfully.", data: response });

            } else {
                res.json({ success: false, message: "Something went wrong!", data: response });

            }
        });
    });
};

var change_password = function (req, res) {

    var UserID = req.body.LoginUserID;
    var Password = req.body.Password;
    var TransctionCode = "123";
    var LoginUserID = req.body.LoginUserID;

    bCrypt.hash(Password, 10).then(function (hashPassword) {

        config.sql.connect(config.db).then(pool => {
            return pool.request()
                .input('UserID', config.sql.Int, UserID)
                .input('Password', config.sql.Decimal, hashPassword)
                .input('TransctionCode', config.sql.VarChar, TransctionCode)
                .input('LoginUserID', config.sql.Int, LoginUserID)
                .execute('U_UserPassword')
        }).then(result => {
            console.log(result)
            if (result && result.recordset[0].MsgStatus == 1) {
                res.json({
                    success: true,
                    message: result.recordset[0].Msg
                });
            } else {
                res.status(404).json({ success: false, message: result.recordset[0].Msg });
            }
        }).catch(err => {
            console.log(err)
            res.status(500).json({ success: false, message: 'There was an error!', error: err });
        });
    });
};

var addAccount = function (req, res) {

    var UserName = req.body.UserName;
    var Password = req.body.Password;
    var FullName = req.body.FullName;
    var Email = req.body.Email;
    var PhoneNumber = req.body.PhoneNumber;
    var RoleID = req.body.RoleID;
    var ExposureLimit = req.body.ExposureLimit;
    var CreditReference = req.body.CreditReference;
    var CommissionSetting = req.body.CommissionSetting;
    var PartnershipSetting = req.body.PartnershipSetting;
    var BetLimitSetting = req.body.BetLimitSetting;
    var MinimumOdds = req.body.MinimumOdds;
    var MaximumOdds = req.body.MaximumOdds;
    var LoginUserID = req.body.LoginUserID;
    var TransctionCode = req.body.TransctionCode;

    var Comm_Upline_1 = req.body.Comm_Upline_1;
    var Comm_Upline_2 = req.body.Comm_Upline_2;
    var Comm_Upline_3 = req.body.Comm_Upline_3;
    var Comm_Downline_1 = req.body.Comm_Downline_1;
    var Comm_Downline_2 = req.body.Comm_Downline_2;
    var Comm_Downline_3 = req.body.Comm_Downline_3;
    var Comm_Our_1 = req.body.Comm_Our_1;
    var Comm_Our_2 = req.body.Comm_Our_2;
    var Comm_Our_3 = req.body.Comm_Our_3;

    var Part_Upline_1 = req.body.Part_Upline_1;
    var Part_Upline_2 = req.body.Part_Upline_2;
    var Part_Upline_3 = req.body.Part_Upline_3;
    var Part_Downline_1 = req.body.Part_Downline_1;
    var Part_Downline_2 = req.body.Part_Downline_2;
    var Part_Downline_3 = req.body.Part_Downline_3;
    var Part_Our_1 = req.body.Part_Our_1;
    var Part_Our_2 = req.body.Part_Our_2;
    var Part_Our_3 = req.body.Part_Our_3;

    var Bet_Min_1 = req.body.Bet_Min_1;
    var Bet_Min_2 = req.body.Bet_Min_2;
    var Bet_Min_3 = req.body.Bet_Min_3;
    var Bet_Min_4 = req.body.Bet_Min_4;
    var Bet_Min_5 = req.body.Bet_Min_5;
    var Bet_Max_1 = req.body.Bet_Max_1;
    var Bet_Max_2 = req.body.Bet_Max_2;
    var Bet_Max_3 = req.body.Bet_Max_3;
    var Bet_Max_4 = req.body.Bet_Max_4;
    var Bet_Max_5 = req.body.Bet_Max_5;
    var Bet_Delay_1 = req.body.Bet_Delay_1;
    var Bet_Delay_2 = req.body.Bet_Delay_2;
    var Bet_Delay_3 = req.body.Bet_Delay_3;
    var Bet_Delay_4 = req.body.Bet_Delay_4;
    var Bet_Delay_5 = req.body.Bet_Delay_5;

    CommissionSetting = '[{"UpLine":"'+Comm_Upline_1+'" ,"DownLine":"'+Comm_Downline_1+'","Our":"'+Comm_Our_1+'","SportID":"1"}, {"UpLine":"'+Comm_Upline_2+'" ,"DownLine":"'+Comm_Downline_2+'","Our":"'+Comm_Our_2+'","SportID":"2"}, {"UpLine":"'+Comm_Upline_3+'" ,"DownLine":"'+Comm_Downline_3+'","Our":"'+Comm_Our_3+'","SportID":"3"} ]'
    PartnershipSetting = '[{"UpLine":"'+Part_Upline_1+'" ,"DownLine":"'+Part_Downline_1+'","Our":"'+Part_Our_1+'","SportID":"1"}, {"UpLine":"'+Part_Upline_2+'" ,"DownLine":"'+Part_Downline_2+'","Our":"'+Part_Our_2+'","SportID":"2"}, {"UpLine":"'+Part_Upline_3+'" ,"DownLine":"'+Part_Downline_3+'","Our":"'+Part_Our_3+'","SportID":"3"} ]'
    BetLimitSetting = '[{"Minimum":"'+Bet_Min_1+'" ,"Maximum":"'+Bet_Max_1+'","Delay":"'+Bet_Delay_1+'","SportID":"1"}, {"Minimum":"'+Bet_Min_2+'" ,"Maximum":"'+Bet_Max_2+'","Delay":"'+Bet_Delay_2+'","SportID":"2"}, {"Minimum":"'+Bet_Min_3+'" ,"Maximum":"'+Bet_Max_3+'","Delay":"'+Bet_Delay_3+'","SportID":"3"}, {"Minimum":"'+Bet_Min_4+'" ,"Maximum":"'+Bet_Max_4+'","Delay":"'+Bet_Delay_4+'","SportID":"4"}, {"Minimum":"'+Bet_Min_5+'" ,"Maximum":"'+Bet_Max_5+'","Delay":"'+Bet_Delay_5+'","SportID":"5"}]'

    // CommissionSetting = '[{"UpLine":"1" ,"DownLine":"1","Our":"100","SportID":"1"}, { "UpLine": "2", "DownLine": "2", "Our": "102", "SportID": "2" }, { "UpLine": "3", "DownLine": "3", "Our": "103", "SportID": "3" } ]'
    // PartnershipSetting = '[{"UpLine":"1" ,"DownLine":"1","Our":"100","SportID":"1"}, {"UpLine":"2" ,"DownLine":"2","Our":"102","SportID":"2"}, { "UpLine": "3", "DownLine": "3", "Our": "103", "SportID": "3" } ]'
    // BetLimitSetting = '[{"Minimum":"500" ,"Maximum":"100000","Delay":"5","SportID":"1"}, {"Minimum":"500" ,"Maximum":"100000","Delay":"5","SportID":"2"}, {"Minimum":"500" ,"Maximum":"100000","Delay":"5","SportID":"3"}, {"Minimum":"500" ,"Maximum":"100000","Delay":"5","SportID":"3"}]'

    bCrypt.hash(Password, 10).then(function (hashPassword) {
        config.sql.connect(config.db).then(pool => {
            return pool.request()
                .input('FullName', config.sql.VarChar, FullName)
                .input('UserName', config.sql.VarChar, UserName)
                .input('Email', config.sql.VarChar, Email)
                .input('PhoneNumber', config.sql.VarChar, PhoneNumber)
                .input('Password', config.sql.VarChar, hashPassword)
                .input('RoleID', config.sql.Int, RoleID)
                .input('ExposureLimit', config.sql.Decimal, ExposureLimit)
                .input('CreditReference', config.sql.Decimal, CreditReference)
                .input('CommissionSetting', config.sql.NVarChar, CommissionSetting)
                .input('PartnershipSetting', config.sql.NVarChar, PartnershipSetting)
                .input('BetLimitSetting', config.sql.NVarChar, BetLimitSetting)
                .input('MinimumOdds', config.sql.Decimal, MinimumOdds)
                .input('MaximumOdds', config.sql.Decimal, MaximumOdds)
                .input('LoginUserID', config.sql.Int, LoginUserID)
                .input('TransctionCode', config.sql.VarChar, TransctionCode)
                .output('UserID', config.sql.Int)
                .execute('IU_Users')
        }).then(result => {
            console.log(result)
            if (result && result.recordset[0].MsgStatus == 1) {
                res.json({ success: true, message: result.recordset[0].Msg });
            } else {
                res.status(404).json({ success: false, message: result.recordset[0].Msg });
            }
        }).catch(err => {
            console.log(err)
            res.status(500).json({ success: false, message: 'There was an error!', error: err });
        });
    });
};

var getAccounts = function (req, res) {

    var LoginUserID = req.body.LoginUserID;

    config.sql.connect(config.db).then(pool => {
        return pool.request()
            .input('LoginUserID', config.sql.Int, LoginUserID)
            .execute('G_GetUserDetail')
    }).then(result => {
        res.json({ success: true, data: result.recordset });
    }).catch(err => {
        console.log(err)
        res.status(500).json({ success: false, message: 'There was an error!', error: err });
    });
};

var userGeneratePoints = function (req, res) {

    var UserID = req.body.UserID;
    var Points = req.body.Points;
    var LoginUserID = req.body.LoginUserID;
    var TransctionCode = req.body.TransctionCode;

    config.sql.connect(config.db).then(pool => {
        return pool.request()
            .input('UserID', config.sql.Int, UserID)
            .input('Points', config.sql.VarChar, Points)
            .input('LoginUserID', config.sql.Int, LoginUserID)
            .input('TransctionCode', config.sql.VarChar, TransctionCode)
            .execute('U_UserGeneratePoints')
    }).then(result => {
        console.log(result)
        if (result && result.recordset[0].MsgStatus == 1) {
            res.json({
                success: true,
                message: result.recordset[0].Msg
            });
        } else {
            res.status(404).json({ success: false, message: result.recordset[0].Msg });
        }
    }).catch(err => {
        console.log(err)
        res.status(500).json({ success: false, message: 'There was an error!', error: err });
    });
};

var userDeposit = function (req, res) {

    var Amount = req.body.Amount;
    var UserID = req.body.UserID;
    var Remarks = req.body.Remarks;
    var LoginUserID = req.body.LoginUserID;
    var TransctionCode = req.body.TransctionCode;
    var LoginRoleID = req.body.LoginRoleID;
console.log(req.body)
    if (LoginRoleID == 3) {

        var FirstName = req.body.FirstName;
        var LastName = req.body.LastName;
        var Email = req.body.Email;
        var PhoneNumber = req.body.PhoneNumber;

        config.sql.connect(config.db).then(pool => {
            return pool.request()
                .input('FirstName', config.sql.VarChar, FirstName)
                .input('LastName', config.sql.VarChar, LastName)
                .input('Email', config.sql.VarChar, Email)
                .input('PhoneNumber', config.sql.VarChar, PhoneNumber)
                .input('Amount', config.sql.Decimal, Amount)
                .input('UserID', config.sql.Int, UserID)
                .input('Remarks', config.sql.VarChar, Remarks)
                .input('TransctionCode', config.sql.VarChar, TransctionCode)
                .input('LoginUserID', config.sql.Int, LoginUserID)
                .output('DepositID', config.sql.Int)
                .execute('I_UserDeposit')
        }).then(result => {
            console.log(result)
            if (result && result.recordset[0].MsgStatus == 1) {
                res.json({
                    success: true,
                    message: result.recordset[0].Msg
                });
            } else {
                res.status(404).json({ success: false, message: result.recordset[0].Msg });
            }
        }).catch(err => {
            console.log(err)
            res.status(500).json({ success: false, message: 'There was an error!', error: err });
        });
    } else {
        config.sql.connect(config.db).then(pool => {
            return pool.request()
                .input('Amount', config.sql.Decimal, Amount)
                .input('UserID', config.sql.Int, UserID)
                .input('Remarks', config.sql.VarChar, Remarks)
                .input('TransctionCode', config.sql.VarChar, TransctionCode)
                .input('LoginUserID', config.sql.Int, LoginUserID)
                .output('DepositID', config.sql.Int)
                .execute('I_UserDeposit')
        }).then(result => {
            console.log(result)
            if (result && result.recordset[0].MsgStatus == 1) {
                res.json({
                    success: true,
                    message: result.recordset[0].Msg
                });
            } else {
                res.status(404).json({ success: false, message: result.recordset[0].Msg });
            }
        }).catch(err => {
            console.log(err)
            res.status(500).json({ success: false, message: 'There was an error!', error: err });
        });
    }

    config.sql.connect(config.db).then(pool => {
        return pool.request()
            .input('FirstName', config.sql.VarChar, FirstName)
            .input('LastName', config.sql.VarChar, LastName)
            .input('Email', config.sql.VarChar, Email)
            .input('PhoneNumber', config.sql.VarChar, PhoneNumber)
            .input('Amount', config.sql.Decimal, Amount)
            .input('UserID', config.sql.Int, UserID)
            .input('Remarks', config.sql.VarChar, Remarks)
            .input('TransctionCode', config.sql.VarChar, TransctionCode)
            .input('LoginUserID', config.sql.Int, LoginUserID)
            .output('DepositID', config.sql.Int)
            .execute('I_UserDeposit')
    }).then(result => {
        console.log(result)
        if (result && result.recordset[0].MsgStatus == 1) {
            res.json({
                success: true,
                message: result.recordset[0].Msg
            });
        } else {
            res.status(404).json({ success: false, message: result.recordset[0].Msg });
        }
    }).catch(err => {
        console.log(err)
        res.status(500).json({ success: false, message: 'There was an error!', error: err });
    });
};

var userWithdrawRequest = function (req, res) {

    var UserID = req.body.UserID;
    var Amount = req.body.Amount;
    var WithdrawType = req.body.WithdrawType;
    var Remarks = req.body.Remarks;
    var LoginUserID = req.body.LoginUserID;
    var TransctionCode = req.body.TransctionCode;
    var LoginRoleID = req.body.LoginRoleID;
    console.log(req.body)
    WithdrawType = "UPI";
    if (LoginRoleID == 3) {

        var AccountName = req.body.AccountName;
        var AccountNumber = req.body.AccountNumber;
        var BankName = req.body.BankName;
        var BankIFSCCode = req.body.BankIFSCCode;

        config.sql.connect(config.db).then(pool => {
            return pool.request()
                .input('UserID', config.sql.Int, UserID)
                .input('Amount', config.sql.Decimal, Amount)
                .input('WithdrawType', config.sql.VarChar, WithdrawType)
                .input('AccountName', config.sql.VarChar, AccountName)
                .input('AccountNumber', config.sql.VarChar, AccountNumber)
                .input('BankName', config.sql.VarChar, BankName)
                .input('BankIFSCCode', config.sql.VarChar, BankIFSCCode)
                .input('Remarks', config.sql.VarChar, Remarks)
                .input('TransctionCode', config.sql.VarChar, TransctionCode)
                .input('LoginUserID', config.sql.Int, LoginUserID)
                .output('WithdrawID', config.sql.Int)
                .execute('I_UserWithdrawRequest')
        }).then(result => {
            console.log(result)
            if (result && result.recordset[0].MsgStatus == 1) {
                res.json({
                    success: true,
                    message: result.recordset[0].Msg
                });
            } else {
                res.status(404).json({ success: false, message: result.recordset[0].Msg });
            }
        }).catch(err => {
            console.log(err)
            res.status(500).json({ success: false, message: 'There was an error!', error: err });
        });
    } else {

        config.sql.connect(config.db).then(pool => {
            return pool.request()
                .input('UserID', config.sql.Int, UserID)
                .input('Amount', config.sql.Decimal, Amount)
                .input('WithdrawType', config.sql.VarChar, WithdrawType)
                .input('Remarks', config.sql.VarChar, Remarks)
                .input('LoginUserID', config.sql.Int, LoginUserID)
                .input('TransctionCode', config.sql.VarChar, TransctionCode)
                .output('WithdrawID', config.sql.Int)
                .execute('I_UserWithdrawRequestBySuperuser')
        }).then(result => {
            console.log(result)
            if (result && result.recordset[0].MsgStatus == 1) {
                res.json({
                    success: true,
                    message: result.recordset[0].Msg
                });
            } else {
                res.status(404).json({ success: false, message: result.recordset[0].Msg });
            }
        }).catch(err => {
            console.log(err)
            res.status(500).json({ success: false, message: 'There was an error!', error: err });
        });
    }
};

var userMinMaxOdds = function (req, res) {

    var UserID = req.body.UserID;
    var MinimumOdds = req.body.MinimumOdds;
    var MaximumOdds = req.body.MaximumOdds;
    var TransctionCode = req.body.TransctionCode;
    var LoginUserID = req.body.LoginUserID;

    config.sql.connect(config.db).then(pool => {
        return pool.request()
            .input('UserID', config.sql.Int, UserID)
            .input('MinimumOdds', config.sql.Decimal, MinimumOdds)
            .input('MaximumOdds', config.sql.Decimal, MaximumOdds)
            .input('TransctionCode', config.sql.VarChar, TransctionCode)
            .input('LoginUserID', config.sql.Int, LoginUserID)
            .execute('IU_UserMinMaxOdds')
    }).then(result => {
        console.log(result)
        if (result && result.recordset[0].MsgStatus == 1) {
            res.json({
                success: true,
                message: result.recordset[0].Msg
            });
        } else {
            res.status(404).json({ success: false, message: result.recordset[0].Msg });
        }
    }).catch(err => {
        console.log(err)
        res.status(500).json({ success: false, message: 'There was an error!', error: err });
    });
};

var userExposureLimit = function (req, res) {

    var UserID = req.body.UserID;
    var ExposureLimit = req.body.ExposureLimit;
    var TransctionCode = req.body.TransctionCode;
    var LoginUserID = req.body.LoginUserID;

    config.sql.connect(config.db).then(pool => {
        return pool.request()
            .input('UserID', config.sql.Int, UserID)
            .input('ExposureLimit', config.sql.Decimal, ExposureLimit)
            .input('TransctionCode', config.sql.VarChar, TransctionCode)
            .input('LoginUserID', config.sql.Int, LoginUserID)
            .execute('IU_UserExposureLimit')
    }).then(result => {
        console.log(result)
        if (result && result.recordset[0].MsgStatus == 1) {
            res.json({
                success: true,
                message: result.recordset[0].Msg
            });
        } else {
            res.status(404).json({ success: false, message: result.recordset[0].Msg });
        }
    }).catch(err => {
        console.log(err)
        res.status(500).json({ success: false, message: 'There was an error!', error: err });
    });
};

var userCreditReference = function (req, res) {

    var UserID = req.body.UserID;
    var CreditReference = req.body.CreditReference;
    var TransctionCode = req.body.TransctionCode;
    var LoginUserID = req.body.LoginUserID;

    config.sql.connect(config.db).then(pool => {
        return pool.request()
            .input('UserID', config.sql.Int, UserID)
            .input('CreditReference', config.sql.Decimal, CreditReference)
            .input('TransctionCode', config.sql.VarChar, TransctionCode)
            .input('LoginUserID', config.sql.Int, LoginUserID)
            .execute('IU_UserCreditReference')
    }).then(result => {
        console.log(result)
        if (result && result.recordset[0].MsgStatus == 1) {
            res.json({
                success: true,
                message: result.recordset[0].Msg
            });
        } else {
            res.status(404).json({ success: false, message: result.recordset[0].Msg });
        }
    }).catch(err => {
        console.log(err)
        res.status(500).json({ success: false, message: 'There was an error!', error: err });
    });
};

var userActiveAandBetStatus = function (req, res) {

    var UserID = req.body.UserID;
    var Active = (req.body.Active == 1 ? true : false);
    var BetStatus = (req.body.BetStatus == 1 ? true : false);
    var TransctionCode = req.body.TransctionCode;
    var LoginUserID = req.body.LoginUserID;
    console.log(req.body)
    config.sql.connect(config.db).then(pool => {
        return pool.request()
            .input('UserID', config.sql.Int, UserID)
            .input('Active', config.sql.Bit, Active)
            .input('BetStatus', config.sql.Bit, BetStatus)
            .input('TransctionCode', config.sql.VarChar, TransctionCode)
            .input('LoginUserID', config.sql.Int, LoginUserID)
            .execute('U_UserActiveAandBetStatus')
    }).then(result => {
        console.log(result)
        if (result && result.recordset[0].MsgStatus == 1) {
            res.json({
                success: true,
                message: result.recordset[0].Msg
            });
        } else {
            res.status(404).json({ success: false, message: result.recordset[0].Msg });
        }
    }).catch(err => {
        console.log(err)
        res.status(500).json({ success: false, message: 'There was an error!', error: err });
    });
};

var userSportsAccess = function (req, res) {

    var UserID = req.body.UserID;
    var Cricket = (req.body.Cricket == 1 ? true : false);
    var Soccer = (req.body.Soccer == 1 ? true : false);
    var Tennis = (req.body.Tennis == 1 ? true : false);
    var Casino = (req.body.Casino == 1 ? true : false);
    var TransctionCode = req.body.TransctionCode;
    var LoginUserID = req.body.LoginUserID;
    console.log(req.body)
    config.sql.connect(config.db).then(pool => {
        return pool.request()
            .input('UserID', config.sql.Int, UserID)
            .input('Cricket', config.sql.Bit, Cricket)
            .input('Soccer', config.sql.Bit, Soccer)
            .input('Tennis', config.sql.Bit, Tennis)
            .input('Casino', config.sql.Bit, Casino)
            .input('TransctionCode', config.sql.VarChar, TransctionCode)
            .input('LoginUserID', config.sql.Int, LoginUserID)
            .execute('U_UserSportsAccess')
    }).then(result => {
        if (result && result.recordset[0].MsgStatus == 1) {
            res.json({
                success: true,
                message: result.recordset[0].Msg
            });
        } else {
            res.status(404).json({ success: false, message: result.recordset[0].Msg });
        }
    }).catch(err => {
        console.log(err)
        res.status(500).json({ success: false, message: 'There was an error!', error: err });
    });
};

var usersBets = function (req, res) {

    var SportID = req.body.SportID;
    var FIID = req.body.FIID; // Reselt ID
    var BetID = req.body.BetID; // PA ID
    var ODValue = req.body.ODValue; // PA 1/4
    var ODCalcValue = req.body.ODCalcValue; // PA (1/4 + 1)
    var BetAmount = req.body.BetAmount; // Amount
    var EventName = req.body.EventName; // home vs away
    var MarketGroup = req.body.MarketGroup; // PA NA
    var LoginUserID = req.body.LoginUserID;
    
    config.sql.connect(config.db).then(pool => {
        return pool.request()
            // .input('UserID', config.sql.Int, LoginUserID)
            .input('SportID', config.sql.Int, SportID)
            .input('FIID', config.sql.VarChar, FIID)
            .input('BetID', config.sql.VarChar, BetID)
            .input('ODValue', config.sql.VarChar, ODValue)
            .input('ODCalcValue', config.sql.VarChar, ODCalcValue)
            .input('BetAmount', config.sql.Decimal, BetAmount)
            .input('EventName', config.sql.VarChar, EventName) 
            .input('MarketGroup', config.sql.VarChar, MarketGroup) 
            // .input('BetWinStatus', config.sql.VarChar, '') 
            .input('LoginUserID', config.sql.Int, LoginUserID)
            .execute('I_UsersBets')

    }).then(result => {
        console.log(result)
        if (result && result.recordset[0].MsgStatus == 1) {
            res.json({
                success: true,
                message: result.recordset[0].Msg
            });
        } else {
            res.status(404).json({ success: false, message: result.recordset[0].Msg });
        }
    }).catch(err => {
        console.log(err)
        res.status(500).json({ success: false, message: 'There was an error!', error: err });
    });
};

var getUsersBets = function (req, res) {

    var LoginUserID = req.body.LoginUserID;

    config.sql.connect(config.db).then(pool => {
        return pool.request()
            .input('LoginUserID', config.sql.Int, LoginUserID)
            .execute('G_GetUsersBets')
    }).then(result => {
        res.json({ success: true, data: result.recordset });
    }).catch(err => {
        console.log(err)
        res.status(500).json({ success: false, message: 'There was an error!', error: err });
    });
};

var getUsersBalance = function (req, res) {

    var LoginUserID = req.body.LoginUserID;

    config.sql.connect(config.db).then(pool => {
        return pool.request()
            .input('UserID', config.sql.Int, LoginUserID)
            .execute('G_GetUsersBalance')
    }).then(result => {
        res.json({ success: true, data: result.recordset });
    }).catch(err => {
        console.log(err)
        res.status(500).json({ success: false, message: 'There was an error!', error: err });
    });
};

var getWithdrawalRequest = function (req, res) {

    var LoginUserID = req.body.LoginUserID;

    config.sql.connect(config.db).then(pool => {
        return pool.request()
            .input('LoginUserID', config.sql.Int, LoginUserID)
            .execute('G_GetWithdrawalRequest')
    }).then(result => {
        res.json({ success: true, data: result.recordset });
    }).catch(err => {
        console.log(err)
        res.status(500).json({ success: false, message: 'There was an error!', error: err });
    });
};

module.exports = {
    registerUser: registerUser,
    reset_password: reset_password,
    update_user_profile: update_user_profile,
    change_password: change_password,
    addAccount: addAccount,
    getAccounts: getAccounts,
    userGeneratePoints: userGeneratePoints,
    userDeposit: userDeposit,
    userWithdrawRequest: userWithdrawRequest,
    userMinMaxOdds: userMinMaxOdds,
    userExposureLimit: userExposureLimit,
    userCreditReference: userCreditReference,
    userActiveAandBetStatus: userActiveAandBetStatus,
    userSportsAccess: userSportsAccess,
    usersBets: usersBets,
    getUsersBets: getUsersBets,
    getUsersBalance: getUsersBalance,
    getWithdrawalRequest: getWithdrawalRequest
}