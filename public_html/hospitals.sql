alter table doctors drop foreign key fk_doctors_hospital;
alter table hospitals_departments drop foreign key fk_hospitals_departments_hospital;

drop table if exists hospitals;
create table hospitals (
  id int unsigned primary key auto_increment,
  name varchar(255) not null,
  postalcode int not null,
  prefecture varchar(50) not null,
  address varchar(255) not null,
  open datetime,
  how_many_doctors int,
  tel int not null,
  fax int,
  mail varchar(255),
  website varchar(255),
  delflag tinyint(1),
  delreazon varchar(255),
  created datetime,
  modified datetime
);

alter table doctors add constraint fk_doctors_hospital foreign key (hospital_id) references hospitals (id);
alter table hospitals_departments add constraint fk_hospitals_departments_hospital foreign key (hospital_id) references hospitals (id);
