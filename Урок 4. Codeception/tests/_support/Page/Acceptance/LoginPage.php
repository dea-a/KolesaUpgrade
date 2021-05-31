<?php
namespace Page\Acceptance;

class LoginPage
{
    //Логин заблокированного пользователя для авторизации
    public const WRONGUSERNAME = 'locked_out_user';

    // Стандартный пароль для авторизации
    public const PASSWORD = 'secret_sauce';

    // URL страницы для авторизации
    public static $URL = '';

    //селектор формы авторизации
    public static $authForm = '#login_button_container';

    //селектор поля ввода логина
    public static $loginInput = '#user-name';

    //селектор поля ввода пароля
    public static $passwordInput = '#password';

    //селектор кнопки входа "LOGIN"
    public static $loginButton = '#login-button';

    //селектор блока ошибки при неуспешной авторизации
    public static $errorMessageBlock = '#login_button_container > div > form > div.error-message-container.error';

    //селектор кнопки закрытия блока ошибки при неуспешной авторизации
    public static $errorMessageCloseButton = '#login_button_container > div > form > div.error-message-container.error > h3 > button';

    /**
     * Объект Tester-а
     * 
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    //Метод конструктора
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Кликает на кнопку закрытия блока сообщения об ошибке при неуспешной авторизации
     */
    public function clikCloseButtonOnErrorMessage()
    {
        $this->acceptanceTester-> click(self::$errorMessageCloseButton);
    }


}
