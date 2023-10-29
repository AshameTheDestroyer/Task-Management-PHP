<?php
class User
{
    public $id;
    public $name;
    public $email;
    public $phone;
    public $surname;
    public $username;
    public $birthday;
    public $middleName;
    public $alternativeEmail;
    public $alternativePhone;

    private $folders;

    public function __construct(
        int $id,
        string $name,
        string $surname,
        string $username,
        DateTime $birthday,
        string $email = null,
        string $phone = null,
        string $middleName = null,
        string $alternativeEmail = null,
        string $alternativePhone = null,
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->surname = $surname;
        $this->username = $username;
        $this->birthday = $birthday;
        $this->middleName = $middleName;
        $this->alternativeEmail = $alternativeEmail;
        $this->alternativePhone = $alternativePhone;

        $this->folders = [
            new Folder(
                id: 0,
                title: "",
                updateDate: new DateTime(),
                creationDate: new DateTime(),
            ),
        ];

        $this->folders = [];
    }
}
?>