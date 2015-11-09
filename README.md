# portfoblog
CMS for creating personal developer portfolio and blog.

# Tips for developers

### Application

#### Install

* ��������� �������, ��������� � ����� �� ����� ��������. OpenServer: `cd domains`

* `git clone https://github.com/valik619/portfoblog.git portfoblog.dev`

* `cd portfoblog.dev`

* `composer install`

* `php artisan vendor:publish`

* `php artisan key:generate`

#### Setting Up

* ������� � ���������� ������� ���������� ������� public

* ����������� ���� .env.example � �������� ���������� � ������������� � .env

* � ����� .env ��������� ������ ��� ���������� � ����� ������

### ������

#### ��������

-����� ������������ ������ Blog:

`php artisan module:make Blog`

-����� ������������� 3 ������ � ���������������� ����������:

`php artisan module:make Blog Portfolio User`

#### ����������
� composer.json ������ ���� ������:

```
	"psr-4": {
            "App\\": "app/",
            "Modules\\": "Modules"
        }
```

���� �� ��� - ������� ���������� �� ��������� ������ ����������� ��� ��� ������������ ������� �� ����� ��������.

����� �������� ������ ��� ����� ������������ ��������:

`composer dump-autoload`

#### Migrations in modules

`php artisan module:make-migration <MigrationName> <ModuleName>`

��������:

`php artisan module:make-migration create_table_users user`

---------------------------------------

������ ������������ �� ������� ���� �� [������������ ����� ������](http://sky.pingpong-labs.com/docs/2.0/modules)

### Images

�� ���������� [ImageManager](https://github.com/anakadote/ImageManager-for-Laravel-5)

