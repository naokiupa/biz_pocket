create database cwfolgkn_ishacom;
grant all on cwfolgkn_ishacom.* to cwfolgkn_ishacom@localhost identified by 'brabanno1st';
use cwfolgkn_ishacom;

create table doctors (
  id int unsigned primary key auto_increment,
  num int not null,
  identifier varchar(255) not null,
  password varchar(255) not null,
  lastname varchar(50) not null,
  firstname varchar(50) not null,
  last_kana varchar(50) not null,
  first_kana varchar(50) not null,
  jender tinyint(1) not null,
  birthday datetime not null,
  hospital_id int unsigned not null,
  department_id int unsigned not null,
  specialty varchar(50),
  registar datetime not null,
  tel int(11) not null,
  fax int(11) not null,
  mail varchar(255) not null,
  secret_q varchar(50) not null,
  secret_a varchar(50) not null,
  opportunity varchar(50) not null,
  reazon varchar(50) not null,
  delflag tinyint(1),
  delreazon varchar(255),
  created datetime,
  modified datetime
);

create table hospitals (
  id int unsigned primary key auto_increment,
  name varchar(255) not null,
  postalcode int(7) not null,
  prefecture varchar(50) not null,
  address varchar(255) not null,
  open datetime,
  how_many_doctors int,
  tel int(11) not null,
  fax int(11),
  mail varchar(255),
  website varchar(255),
  delflag tinyint(1),
  delreazon varchar(255),
  created datetime,
  modified datetime
);

create table departments (
  id int unsigned primary key auto_increment,
  department varchar(50) not null,
  delflag tinyint(1),
  delreazon varchar(255),
  created datetime,
  modified datetime
);

create table hospitals_departments (
  id int unsigned primary key auto_increment,
  hospital_id int unsigned not null,
  department_id int unsigned not null,
  delflag tinyint(1),
  delreazon varchar(255),
  created datetime,
  modified datetime
);

create table staffs (
  id int unsigned primary key auto_increment,
  name varchar(50) not null,
  delflag tinyint(1),
  delreazon varchar(255),
  created datetime,
  modified datetime
);

create table users (
  id int unsigned primary key auto_increment,
  name varchar(50) not null,
  delflag tinyint(1),
  delreazon varchar(255),
  created datetime,
  modified datetime
);

create table categories (
  id int unsigned primary key auto_increment,
  name varchar(50) not null,
  lead text not null,
  delflag tinyint(1),
  delreazon varchar(255),
  created datetime,
  modified datetime
);

create table diseases (
  id int unsigned primary key auto_increment,
  name varchar(50) not null,
  category_id int unsigned not null,
  lead text not null,
  delflag tinyint(1),
  delreazon varchar(255),
  created datetime,
  modified datetime
);

create table questions (
  id int unsigned primary key auto_increment,
  title varchar(50) not null,
  body text not null,
  by_staff boolean not null,
  staff_id int unsigned,
  user_id int unsigned,
  disease_id int unsigned not null,
  delflag tinyint(1),
  delreazon varchar(255),
  created datetime,
  modified datetime
);

create table answers (
  id int unsigned primary key auto_increment,
  title varchar(50) not null,
  body text not null,
  doctor_id int unsigned not null,
  question_id int unsigned not null,
  delflag tinyint(1),
  delreazon varchar(255),
  created datetime,
  modified datetime
);

alter table doctors add constraint fk_doctors_hospital foreign key (hospital_id) references hospitals (id);
alter table doctors add constraint fk_doctors_department foreign key (department_id) references departments (id);

alter table hospitals_departments add constraint fk_hospitals_departments_hospital foreign key (hospital_id) references hospitals (id);
alter table hospitals_departments add constraint fk_hospitals_departments_department foreign key (department_id) references departments (id);

alter table diseases add constraint fk_diseases_category foreign key (category_id) references categories (id);

alter table questions add constraint fk_questions_user foreign key (user_id) references users (id);
alter table questions add constraint fk_questions_staff foreign key (staff_id) references staffs (id);
alter table questions add constraint fk_questions_disease foreign key (disease_id) references diseases (id);

alter table answers add constraint fk_answers_doctor foreign key (doctor_id) references doctors (id);
alter table answers add constraint fk_answers_question foreign key (question_id) references questions (id);

desc doctors;
desc hospitals;
desc departments;
desc hospitals_departments;
desc users;
desc staffs;
desc categories;
desc diseases;
desc questions;
desc answers;
