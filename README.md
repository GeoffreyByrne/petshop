#Petshop API

This is a working Smyfony 3.1 version of the petshop API spec [Based on https://petstore.swagger.io/ ](https://petstore.swagger.io/)

The only endpoint that is finished is the /pet endpoint. The code for that can be found in petshop/src/PetBundle/Controller/DefaultController

The rest of tne endpoints for the PetBundle are mapped out with their respective methods. But not implemented. 

There are 3 bundles breaking the example up into 3 micro services. PetBundle, for handling all the pets. StoreBundle for handling all the orders, UserBundle for managing users and their accounts.

Each Bundle has had their Entity's created. And can be found in petshop/src/*Bundle/Entity

These are using Doctrine ORM and will handle most types of calls related to database operations, particularly CRUD.



## Database DDL's.

### Pet
```mysql
create table pet
(
  id         bigint auto_increment
    primary key,
  category   int                                   null,
  pet_name   varchar(255)                          null,
  photo_urls text                                  null,
  tags       text                                  null,
  status     enum ('available', 'pending', 'sold') null,
  constraint pet_category_id_fk
    foreign key (category) references category (id)
);
```

### Category
```mysql
create table category
(
  id   int auto_increment
    primary key,
  name varchar(255) not null
);
```

### Order
```mysql
create table `order`
(
  id        bigint auto_increment
    primary key,
  pet_id    bigint                                   null,
  quantity  int                                      null,
  ship_date datetime                                 null,
  status    enum ('placed', 'approved', 'delivered') null,
  complete  tinyint                                  null
);

```

### User
```mysql
create table user
(
  id            int auto_increment
    primary key,
  user_name     varchar(255) null,
  first_name    varchar(255) null,
  last_name     varchar(255) null,
  email         varchar(255) null,
  user_password varchar(255) null,
  phone         varchar(255) null,
  user_status   int          null
);

```


###tag
```mysql
create table tag
(
  id   bigint auto_increment
    primary key,
  name varchar(255) null
);
```