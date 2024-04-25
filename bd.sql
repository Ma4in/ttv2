CREATE SCHEMA IF NOT EXISTS tt;
CREATE EXTENSION pgcrypto;

CREATE TABLE IF NOT EXISTS tt.users
(
    login varchar UNIQUE NOT NULL,
    password text NOT NULL,
    PRIMARY KEY (login)
);

insert into tt.users (login, password) values ('admin', crypt('default_password', gen_salt('md5')));

SELECT (password = crypt('default_password', password)) 
AS password_match
FROM tt.users
WHERE login= 'admin' ;

CREATE TABLE IF NOT EXISTS tt.user_corp
(
    user_login varchar UNIQUE NOT NULL,
    namegov varchar(6),
    name text,
    second_name text,
    formcorp varchar(10),
    shortname text,
    addres_urid text,
    addres_fact text,
    email text,
    phone1 varchar(14),
    phone2 varchar(14),
    inn varchar(10),
    kpp varchar(15),
    ogrn varchar(15),
    compbal text,
    bank_account text,
    currency_account text,
    transit_currency_account text,
    itn text,
    spkmap text,
    spkmap_date date,
    map text,
    map_dateon date,
    map_datecount date,
    rtp text,
    rtp_date date,
    duties decimal,
    dutieson date,
    dutiesoff date,
    insurance text,
    ins_name text,
    ins_dateon date,
    ins_dateoff date,
    fioip text,
    innip varchar(10),
    ogrnip varchar(15),
    dozvol text,
    doz_date date,
    doz_dateon date,
    doz_dateoff date,
    money boolean,
    dancar boolean,
    permission text,

    foreign key (user_login) references tt.users (login) on delete cascade
);


CREATE TABLE IF NOT EXISTS tt.drivers
(
    user_login varchar UNIQUE NOT NULL,
    fiospec text,
    post text,
    fio_v text,
    nation text,
    inpassnum text,
    idl text,
    visa text,
    visa_date date,
    visa_dateon date,
    visa_dateoff date,
    iip text,

    foreign key (user_login) references tt.users (login) on delete cascade
);

CREATE TABLE IF NOT EXISTS tt.auto
(
    user_login varchar UNIQUE NOT NULL,
    type_auto text,
    tnved varchar(10),
    fuel_type varchar(5),
    country_reg varchar(4),
    auto_id varchar(10),
    man_name text,
    model text,
    vinid text,
    engine_volume decimal,
    engine_hp int,
    engine_id varchar(10),
    book_value decimal,
    card_numb varchar(20),
    ecosign varchar(1),
    date_to date,
    off_take_year date,
    ts_code varchar(1),
    color varchar(10),
    change_auto text,
    eco varchar(10),
    trailer_type varchar(3),
    loadcap int,
    axis int,
    maxaxis int,
    trailer_reg_country varchar(5),
    trailer_regnum varchar(10),
    trailer_man_name text,
    trailer_model text,
    trailer_type text,
    trailer_dors int,
    trailer_weight int,
    trailer_pneumo varchar(1),
    trailer_vinid text,
    trailer_datecre date,
    trailer_dim text,
    trailer_color varchar(10),
    trailer_off_country varchar(5),
    trailer_bsp decimal,

    foreign key (user_login) references tt.users (login) on delete cascade
);