

create table if not exists users (
    id int primary key auto_increment,
    email Varchar(50) not null unique,
    password Varchar(100) not null  ,
    name Varchar(50) null,
    role Varchar(50) default "user"
)

insert into users ( email, password, name) values ( `hybiekay2@gmail.com`,   "password" "ibukun" )


select * from users where email = 'hybiekay2@gmail.com' and password = ""