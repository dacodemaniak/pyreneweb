webpackJsonp([0],[
/* 0 */,
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", { value: true });
exports._PY_API_ROOT_ = 'http://api.pyrene.wrk/';
exports._PY_API_USER_ = 'Customer';

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

Object.defineProperty(exports, "__esModule", { value: true });

var Toast = function () {
    function Toast(options) {
        _classCallCheck(this, Toast);

        this.options = options;
        if (!options.mainAlertClass) {
            options.mainAlertClass = 'alert';
        }
        if (!options.subAlertClass) {
            options.subAlertClass = 'alert-info';
        }
        if (!options.mainClass) {
            options.mainClass = 'toast';
        }
        if (!options.duration || options.duration === 0) {
            options.duration = 1.5;
        }
        this._doToast();
    }

    _createClass(Toast, [{
        key: "_doToast",
        value: function _doToast() {
            var toast = $('<div>');
            toast.addClass(this.options.mainAlertClass).addClass(this.options.subAlertClass).addClass(this.options.mainClass);
            if (this.options.mainAnimatedClass && this.options.animatedClass) {
                toast.addClass(this.options.mainAnimatedClass).addClass(this.options.animatedClass);
            }
            toast.attr('role', 'alert').html('<strong>' + this.options.content + '</strong>');
            toast.appendTo($('body'));
            var options = this.options;
            setTimeout(function () {
                if (options.mainAnimatedClass && options.animatedClass) {
                    toast.removeClass(options.mainAnimatedClass).addClass(options.animatedOutClass);
                    setTimeout(function () {
                        toast.remove();
                    }, 1500);
                } else {
                    toast.remove();
                }
            }, this.options.duration * 1000);
        }
    }]);

    return Toast;
}();

exports.Toast = Toast;

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

Object.defineProperty(exports, "__esModule", { value: true });
var $ = __webpack_require__(0);
var dataservice_1 = __webpack_require__(8);
var templateloader_1 = __webpack_require__(9);
var urlparser_1 = __webpack_require__(10);
var signin_1 = __webpack_require__(6);
var signup_1 = __webpack_require__(7);
var Constants = __webpack_require__(1);

var Customer = function () {
    function Customer() {
        var _this = this;

        _classCallCheck(this, Customer);

        var dataservice = new dataservice_1.DataService();
        var user = dataservice.getUser();
        console.log('Instanciation de la classe Customer');
        if (!user === null) {
            this._hydrate(user.id).then(function (datas) {
                _this._id = user.id;
                _this._name = datas.nom;
                _this._forname = datas.prenom;
                _this._phone = datas.telephone;
                _this._civility = datas.civilite;
                _this._active = datas.statut === 1 ? true : false;
                console.log('Bienvenue ' + _this._name);
            });
        } else {
            var loader = new templateloader_1.TemplateLoader();
            var customer = $('[customer]');
            loader.load('Customer', 'signin').then(function (template) {
                template.appendTo(customer);
            });
            var basket = $('[basket]');
            loader.load('Customer', 'basket').then(function (template) {
                template.appendTo(basket);
            });
        }
        this._setListeners();
    }

    _createClass(Customer, [{
        key: "_setListeners",
        value: function _setListeners() {
            var parser = new urlparser_1.UrlParser();
            console.log('Route courante : ' + parser.getRoute());
            if (parser.getRoute() === 'inscription') {
                var signin = new signin_1.Signin();
                var signup = new signup_1.Signup();
            }
        }
    }, {
        key: "_hydrate",
        value: function _hydrate(id) {
            return new Promise(function (resolve) {
                var _url = Constants._PY_API_ROOT_ + Constants._PY_API_USER_ + '/' + id;
                $.ajax({
                    url: _url,
                    method: 'get',
                    dataType: 'json',
                    success: function success(datas) {
                        var returnedDatas = datas.data;
                        if (datas.statut === 0) {
                            console.log('Something went wrong... Sorry !');
                        } else {
                            resolve(returnedDatas);
                        }
                    },
                    error: function error(xhr, _error) {
                        console.log('Erreur lors de l\'appel de l\'API !');
                    }
                });
            });
        }
    }]);

    return Customer;
}();

exports.Customer = Customer;

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", { value: true });
var $ = __webpack_require__(0);
$.fn.prependText = function (prefix) {
    console.log("prefix with " + prefix);
    $(this).text(prefix + $(this).text());
};

/***/ }),
/* 5 */,
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

Object.defineProperty(exports, "__esModule", { value: true });
var $ = __webpack_require__(0);
var Constants = __webpack_require__(1);
var toast_1 = __webpack_require__(2);

var Signin = function () {
    function Signin() {
        var _this = this;

        _classCallCheck(this, Signin);

        console.log('Contrôle du formulaire de connexion');
        var _jQueryFormData = $('#login input');
        _jQueryFormData.on('keyup', function (event) {
            return _this._inputListener();
        });
        var _loginForm = $('#login');
        _loginForm.on('submit', function (event) {
            return _this._authentication(event);
        });
    }

    _createClass(Signin, [{
        key: "_inputListener",
        value: function _inputListener() {
            var validForm = true;
            $('#login input.required').each(function () {
                if ($(this).val() === '') {
                    validForm = false;
                }
            });
            if (validForm) {
                $('#loginBtn').removeAttr('disabled');
            } else {
                $('#loginBtn').prop('disabled', 'disabled');
            }
        }
    }, {
        key: "_authentication",
        value: function _authentication(event) {
            event.preventDefault();
            var _url = Constants._PY_API_ROOT_ + Constants._PY_API_USER_;
            $.ajax({
                url: _url,
                data: {
                    'identifiant': $('#identifiant').val(),
                    'password': $('#passField').val()
                },
                dataType: 'json',
                success: function success(results) {
                    $('#identifiant').val('');
                    $('#passField').val('');
                    var callDatas = results.data;
                    if (callDatas.hasOwnProperty('error')) {
                        var _toast = new toast_1.Toast({
                            duration: 2,
                            subAlertClass: 'alert-danger',
                            mainAnimatedClass: 'animated',
                            animatedClass: 'lightSpeedIn',
                            animatedOutClass: 'lightSpeedOut',
                            content: callDatas.error
                        });
                        $('#loginBtn').prop('disabled', 'disabled');
                    } else {
                        console.log('Afficher le menu Utilisateur et le menu Footer');
                        $('.my-account-menu').removeClass('not-active');
                    }
                },
                error: function error(xhr, _error) {
                    console.log('Erreur lors de l\'appel de l\'API');
                    $('#loginBtn').prop('disabled', 'disabled');
                }
            });
        }
    }]);

    return Signin;
}();

exports.Signin = Signin;

/***/ }),
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

Object.defineProperty(exports, "__esModule", { value: true });
var $ = __webpack_require__(0);
var Constants = __webpack_require__(1);
var toast_1 = __webpack_require__(2);

var Signup = function () {
    function Signup() {
        var _this = this;

        _classCallCheck(this, Signup);

        console.log('Contrôle du formulaire d\'inscription');
        var _jQueryFormData = $('#signin input');
        _jQueryFormData.on('keyup', function (event) {
            return _this._inputListener(event);
        });
        var _form = $('#signin');
        _form.on('submit', function (event) {
            return _this._createAccount(event);
        });
    }

    _createClass(Signup, [{
        key: "_inputListener",
        value: function _inputListener(event) {
            var theField = $(event.target);
            console.log('Check du champ : ' + theField.attr('id'));
            var validForm = true;
            var confirmMail = true;
            var confirmPassword = true;
            $('#signin input.required').each(function () {
                if ($(this).val() === '') {
                    validForm = false;
                }
            });
            if (theField.attr('id') === 'confirm-email' || theField.attr('id') === 'confirm-passphrase' || theField.attr('id') === 'email' || theField.attr('id') === 'passphrase') {
                var initialFieldId = '';
                var initialField = null;
                var confirmField = null;
                if (theField.attr('id').substring(0, 7) !== 'confirm') {
                    initialFieldId = 'confirm-' + theField.attr('id');
                    initialField = $('#' + initialFieldId);
                    confirmField = initialField;
                } else {
                    initialFieldId = theField.attr('id').substring(8);
                    initialField = $('#' + initialFieldId);
                    confirmField = theField;
                }
                if (initialField.val() !== '') {
                    if (theField.val() === initialField.val()) {
                        confirmField.removeClass('nomatch').addClass('match');
                        if (confirmField.attr('id') === 'confirm-email') {
                            confirmMail = true;
                        } else {
                            confirmPassword = true;
                        }
                    } else {
                        confirmField.removeClass('match').addClass('nomatch');
                        if (confirmField.attr('id') === 'confirm-email') {
                            confirmMail = false;
                        } else {
                            confirmPassword = false;
                        }
                    }
                }
            }
            if (validForm && confirmMail && confirmPassword) {
                $('#signinBtn').removeAttr('disabled');
            } else {
                $('#signinBtn').prop('disabled', 'disabled');
            }
        }
    }, {
        key: "_createAccount",
        value: function _createAccount(event) {
            event.preventDefault();
            var _url = Constants._PY_API_ROOT_ + Constants._PY_API_USER_;
            var form = $('#signin input');
            var datas = {};
            var content = {};
            form.each(function () {
                if ($(this).data('property') !== null) {
                    var property = $(this).data('property');
                    content[property] = $(this).val();
                }
                if ($(this).data('mapping') !== null) {
                    var _property = $(this).data('mapping');
                    datas[_property] = $(this).val();
                }
            });
            datas.content = content;
            $.ajax({
                url: _url,
                method: 'put',
                data: datas,
                dataType: 'json',
                success: function success(results) {
                    $(':input', '#signin').not(':button, :submit, :reset, :hidden').val('');
                    $('input[name^=confirm-]').removeClass('match').addClass('no-match');
                    var callDatas = results.data;
                    if (callDatas.hasOwnProperty('error')) {
                        var _toast = new toast_1.Toast({
                            duration: 2,
                            subAlertClass: 'alert-danger',
                            mainAnimatedClass: 'animated',
                            animatedClass: 'lightSpeedIn',
                            animatedOutClass: 'lightSpeedOut',
                            content: callDatas.error
                        });
                        $('#loginBtn').prop('disabled', 'disabled');
                    } else {
                        console.log('Afficher le menu Utilisateur et le menu Footer');
                        var _toast2 = new toast_1.Toast({
                            duration: 2.5,
                            subAlertClass: 'alert-success',
                            mainAnimatedClass: 'animated',
                            animatedClass: 'lightSpeedIn',
                            animatedOutClass: 'lightSpeedOut',
                            content: callDatas.content
                        });
                    }
                },
                error: function error(xhr, _error) {
                    console.log('Erreur lors de l\'appel de l\'API');
                    $('#signinBtn').prop('disabled', 'disabled');
                }
            });
        }
    }]);

    return Signup;
}();

exports.Signup = Signup;

/***/ }),
/* 8 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

Object.defineProperty(exports, "__esModule", { value: true });

var DataService = function () {
    function DataService() {
        _classCallCheck(this, DataService);

        this._user = {};
        this._setUser();
    }

    _createClass(DataService, [{
        key: "getUser",
        value: function getUser() {
            return this._user;
        }
    }, {
        key: "_setUser",
        value: function _setUser() {
            var user = localStorage.getItem('user');
            if (!user === null) {
                this._user = JSON.parse(user);
            }
        }
    }]);

    return DataService;
}();

exports.DataService = DataService;

/***/ }),
/* 9 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

Object.defineProperty(exports, "__esModule", { value: true });
var $ = __webpack_require__(0);

var TemplateLoader = function () {
    function TemplateLoader() {
        _classCallCheck(this, TemplateLoader);
    }

    _createClass(TemplateLoader, [{
        key: "load",
        value: function load(from, template) {
            return new Promise(function (resolve) {
                var viewSrc = './_assets/src/Components/' + from + '/' + template + '.html';
                $.ajax({
                    url: viewSrc,
                    method: 'get',
                    success: function success(template) {
                        resolve($(template));
                    },
                    error: function error(xhr, errorText) {
                        console.log(errorText);
                        resolve(false);
                    }
                });
            });
        }
    }]);

    return TemplateLoader;
}();

exports.TemplateLoader = TemplateLoader;

/***/ }),
/* 10 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

Object.defineProperty(exports, "__esModule", { value: true });

var UrlParser = function () {
    function UrlParser() {
        _classCallCheck(this, UrlParser);

        this._hash = location.hash;
        this._host = location.host;
        this._hostname = location.hostname;
        this._href = location.href;
        this._origin = location.origin;
        this._pathname = location.pathname;
        this._port = location.port;
        this._protocol = location.protocol;
        this._search = location.search;
    }

    _createClass(UrlParser, [{
        key: "getRoute",
        value: function getRoute() {
            return this._pathname.substring(1).trim();
        }
    }]);

    return UrlParser;
}();

exports.UrlParser = UrlParser;

/***/ }),
/* 11 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", { value: true });
__webpack_require__(5);
__webpack_require__(4);
var customer_1 = __webpack_require__(3);
window.onload = function () {
    console.log('Coucou app.ts');
    var customer = new customer_1.Customer();
};

/***/ })
],[11]);