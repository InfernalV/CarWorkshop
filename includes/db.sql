CREATE TABLE employee (
    id int(11) auto_increment primary key,
    name varchar(25),
    password varchar(30),
    work_type varchar (30)
);
CREATE TABLE customer(
    id int(11) auto_increment primary key,
    name_project varchar(25),
    name_client varchar(30),
    task varchar (30),
    employee varchar(25),
    description varchar (255),
    comm varchar (255),
    week varchar (20),
    day varchar (20),
    time varchar (20),
    timestamp date
);
CREATE TABLE times (
                       id int(11) auto_increment primary key,
                       time varchar(20)
);
insert into times (id, time) VALUES(0,'9:00');
insert into times (id, time) VALUES(0,'10:00');
insert into times (id, time) VALUES(0,'11:00');
insert into times (id, time) VALUES(0,'12:00');
insert into times (id, time) VALUES(0,'13:00');
insert into times (id, time) VALUES(0,'14:00');
insert into times (id, time) VALUES(0,'15:00');
insert into times (id, time) VALUES(0,'16:00');
insert into times (id, time) VALUES(0,'17:00');
insert into times (id, time) VALUES(0,'18:00');
insert into times (id, time) VALUES(0,'19:00');
insert into times (id, time) VALUES(0,'20:00');

CREATE TABLE day (
                       id int(11) auto_increment primary key,
                       day varchar(20)
);
insert into day (id, day) VALUES(0,'monday');
insert into day (id, day) VALUES(0,'tuesday');
insert into day (id, day) VALUES(0,'wednesday');
insert into day (id, day) VALUES(0,'thursday');
insert into day (id, day) VALUES(0,'Friday');

CREATE TABLE week (
                       id int(11) auto_increment primary key,
                       week varchar(20)
);
insert into week (id, week) VALUES(0,'week 1');
insert into week (id, week) VALUES(0,'week 2');
insert into week (id, week) VALUES(0,'week 3');
insert into week (id, week) VALUES(0,'week 4');
insert into week (id, week) VALUES(0,'week 5');
insert into week (id, week) VALUES(0,'week 6');
insert into week (id, week) VALUES(0,'week 7');
insert into week (id, week) VALUES(0,'week 8');
insert into week (id, week) VALUES(0,'week 9');
insert into week (id, week) VALUES(0,'week 10');
insert into week (id, week) VALUES(0,'week 11');
insert into week (id, week) VALUES(0,'week 12');
insert into week (id, week) VALUES(0,'week 13');
insert into week (id, week) VALUES(0,'week 14');
insert into week (id, week) VALUES(0,'week 15');
insert into week (id, week) VALUES(0,'week 16');
insert into week (id, week) VALUES(0,'week 17');
insert into week (id, week) VALUES(0,'week 18');
insert into week (id, week) VALUES(0,'week 19');
insert into week (id, week) VALUES(0,'week 20');
insert into week (id, week) VALUES(0,'week 21');
insert into week (id, week) VALUES(0,'week 22');
insert into week (id, week) VALUES(0,'week 23');
insert into week (id, week) VALUES(0,'week 24');
insert into week (id, week) VALUES(0,'week 25');
insert into week (id, week) VALUES(0,'week 26');
insert into week (id, week) VALUES(0,'week 27');
insert into week (id, week) VALUES(0,'week 28');
insert into week (id, week) VALUES(0,'week 29');
insert into week (id, week) VALUES(0,'week 30');
insert into week (id, week) VALUES(0,'week 31');
insert into week (id, week) VALUES(0,'week 32');
insert into week (id, week) VALUES(0,'week 33');
insert into week (id, week) VALUES(0,'week 34');
insert into week (id, week) VALUES(0,'week 35');
insert into week (id, week) VALUES(0,'week 36');
insert into week (id, week) VALUES(0,'week 37');
insert into week (id, week) VALUES(0,'week 38');
insert into week (id, week) VALUES(0,'week 39');
insert into week (id, week) VALUES(0,'week 40');
insert into week (id, week) VALUES(0,'week 41');
insert into week (id, week) VALUES(0,'week 42');
insert into week (id, week) VALUES(0,'week 43');
insert into week (id, week) VALUES(0,'week 44');
insert into week (id, week) VALUES(0,'week 45');
insert into week (id, week) VALUES(0,'week 46');
insert into week (id, week) VALUES(0,'week 47');
insert into week (id, week) VALUES(0,'week 48');
insert into week (id, week) VALUES(0,'week 49');
insert into week (id, week) VALUES(0,'week 50');
insert into week (id, week) VALUES(0,'week 51');
insert into week (id, week) VALUES(0,'week 52');

CREATE TABLE work_type (
                       id int(11) auto_increment primary key,
                       work varchar(20)
);
insert into work_type (id, work) VALUES(0,'APK');
insert into work_type (id, work) VALUES(0,'Kleine Beurt');
insert into work_type (id, work) VALUES(0,'Groote Beurt');
insert into work_type (id, work) VALUES(0,'Reparatie');

