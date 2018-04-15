create table university(
	un_Sn int auto_increment,
    un_Caption varchar(200) not null unique,
    primary key(un_Sn)
)auto_increment=100000001;

create table school(
	school_Sn int,
    school_Caption varchar(200) not null,
    school_unSn int not null,
    foreign key(school_Sn) references university(un_Sn),
    primary key(school_Sn)
)auto_increment=100000001;

create table staff(
	staff_Sn int,
    staff_name varchar(20) not null,
    staff_gender enum('男','女') not null,
    staff_title varchar(20),/*职称*/
	staff_ID varchar(10) not null,/*工号*/
    staff_IDcard varchar(30) not null unique,/*身份证*/
    staff_schoolSn int,
    staff_status enum('在职','离职'),
    foreign key(staff_schoolSn) references school(school_Sn)
)auto_increment=100000001;

create table profession(
	prof_Sn	int	primary key auto_increment,
	prof_Caption varchar(50) not null,
	prof_schoolSn int not null,
	prof_Rank varchar(10) default '本科',
	prof_Years float not null default 4,
	prof_Memo varchar(500),
    foreign key(prof_schoolSn) references school(school_Sn)
)auto_increment=100000001;

create table courseType(
	ct_Sn	int	primary key auto_increment,		
	ct_Caption varchar(30) unique	not null,
	ct_Memo	varchar(500)
)auto_increment=100000001;

create table schemaList(
	sl_Sn int primary key auto_increment,
	sl_Caption	varchar(50) not null,
	sl_Year	char(4),
	sl_TotalCredit	int,				
	sl_Structure varchar(200),
	sl_Memo	varchar(500)
)auto_increment=100000001;

create table schemaDetail(
sd_Sn	bigint	primary key auto_increment,
sd_slSn	varchar(50)	not null,
sd_courseSn	bigint not null,
sd_courseCredit	float not null,
sd_ctSn	int not null,
foreign key(sd_slSn) references schemeList(sl_Sn),
foreign key(sd_ctSn) references CourseType(ct_Sn),
foreign key(sd_courseSn) references Course(course_Sn)
)auto_increment=100000001;

create table class(
class_Sn	bigint	primary key	auto_increment,
class_Caption	varchar(50)	not null,
class_InYear	int	not null,
class_OutYear	int	not null,
class_SchoolSn	int	not null,
class_slSn	int	not null,
foreign key(class_schoolSn) references school(school_Sn),
foreign key(class_slSn) references SchemeList(sl_Sn)
)auto_increment=100000001;

create table course(
course_Sn	bigint	primary key	,	
course_ID	varchar(20)	,
course_Caption	varchar(50) not null,	
course_Credit	float not null,
course_LilunXueshi	int not null default 0,
course_ShiyanXueshi	int	not null default 0 ,
course_schoolSn	int,
foreign key(course_schoolSn) references school(school_Sn)
)auto_increment=100000001;

create table item(
item_Sn	bigint primary key	auto_increment,
item_ID	varchar(20)	,	
item_Caption varchar(50) not null,	
item_Xueshi	int	not null,
item_courseSn bigint not null	default 0,
item_File varchar(500),
foreign key(item_courseSn) references course(course_Sn)
)auto_increment=100000001;


create table student(
stu_Sn	bigint	primary key auto_increment,		
stu_Name varchar(50)	not null,
stu_Gender	enum('男','女'),
stu_profSn	int,
stu_classSn	bigint,	
stu_Idcard	char(20),		
stu_Jiguan	varchar(50) not null,
stu_Telephone	varchar(50),
foreign key (stu_profSn )references profession(prof_Sn),
foreign key (stu_classSn )references class(class_Sn)
)auto_increment=100000001;

create table term(
term_Sn	int	primary key auto_increment,
term_Caption varchar(20) not null,
term_Current char(1),
term_Memo varchar(50)
);

create table KAIKE(
kaike_Sn bigint	primary key auto_increment,		
kaike_termSn int not null,
kaike_CourseSn	bigint not null,
kaike_staffSn1	bigint not null,/*教师*/
kaike_staffSn2	bigint not null,/*实验教师*/
kaike_Room	varchar(500) not null,
kaike_RoomSize	int	 not null,
kaike_Information longtext,	
kaike_Directory	varchar(500) unique	not null,
kaike_Memo	varchar(500),
foreign key (kaike_termSn) references term(term_Sn),
foreign key (kaike_courseSn) references course(course_Sn),
foreign key(kaike_staffSn1) references staff(staff_Sn),
foreign key(kaike_staffSn2) references staff(staff_Sn)
)auto_increment = 100000001;
