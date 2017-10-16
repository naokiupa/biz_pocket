alter table answers drop foreign key fk_answers_doctor;

drop table if exists doctors;
create table doctors (
  id int unsigned primary key auto_increment,
  number int not null,
  login_name varchar(50) not null,
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
  tel int not null,
  fax int,
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

alter table doctors add constraint fk_doctors_hospital foreign key (hospital_id) references hospitals (id);
alter table doctors add constraint fk_doctors_department foreign key (department_id) references departments (id);

alter table answers add constraint fk_answers_doctor foreign key (doctor_id) references doctors (id);
