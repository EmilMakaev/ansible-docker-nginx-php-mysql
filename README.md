## Инструкция

Для теста нужно добавить файл `hosts.ini` с адресом для подключения к серверу и добавить `.env` файл в этот путь: `./ansible/roles/web_app/files/.env`

## Пример переменных:

```plaintext
MYSQL_ROOT_PASSWORD=root_password
MYSQL_DATABASE=test_db
MYSQL_USER=test_user
MYSQL_PASSWORD=test_password
```

## Информация

Проверял на Ubuntu 24.04. Для RHEL и других Debian дистрибутивов отдельных tasks нет.
