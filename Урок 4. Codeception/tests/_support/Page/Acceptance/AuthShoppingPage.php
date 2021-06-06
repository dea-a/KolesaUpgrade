<?php
namespace Page\Acceptance;

class AuthShoppingPage
{
     /**
     * email для входа в личный кабинет пользователя
     */
    public const EMAIL = 'cidiw31110@relumyx.com';

     /**
     * пароль для входа в личный кабинет пользователя
     */
    public const PASSWORD = '123456789';

     /**
     *  URL страницы авторизации 
     */ 
    public static $URL = 'index.php?controller=authentication&back=my-account';

     /**
     * селектор формы входа в личный кабинет
     */
    public static $loginForm = '//*[@id="login_form"]';

     /**
     * селектор поля ввода email для входа 
     */
    public static $emaiField = '//*[@id="email"]';

     /**
     * селектор поля ввода пароля для входа 
     */
    public static $passwordField = '//*[@id="passwd"]';

     /**
     * селектор кнопки входа в личный кабинет
     */
    public static $loginButton = '//*[@id="SubmitLogin"]';

}
