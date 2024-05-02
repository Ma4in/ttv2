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
    -- user_login varchar UNIQUE NOT NULL,
    -- namegov varchar(6),
    -- name text,
    -- second_name text,
    -- formcorp varchar(10),
    -- shortname text,
    -- addres_urid text,
    -- addres_fact text,
    -- email text,
    -- phone1 varchar(14),
    -- phone2 varchar(14),
    -- inn varchar(10),
    -- kpp varchar(15),
    -- ogrn varchar(15),
    -- compbal text,
    -- bank_account text,
    -- currency_account text,
    -- transit_currency_account text,
    -- itn text,
    -- spkmap text,
    -- spkmap_date date,
    -- map text,
    -- map_dateon date,
    -- map_datecount date,
    -- rtp text,
    -- rtp_date date,
    -- duties decimal,
    -- dutieson date,
    -- dutiesoff date,
    -- insurance text,
    -- ins_name text,
    -- ins_dateon date,
    -- ins_dateoff date,
    fioip text,
    innip varchar(10),
    ogrnip varchar(15),
    -- dozvol text,
    -- doz_date date,
    -- doz_dateon date,
    -- doz_dateoff date,
    -- money boolean,
    -- dancar boolean,
    -- permission text,

    foreign key (user_login) references tt.users (login) on delete cascade
);

UPDATE tt.user_corp
set namegov = 'def',
name = 'default',
second_name = 'default',
formcorp = 'def',
shortname = 'default',
addres_urid = 'default',
addres_fact = 'default',
email = 'default',
phone1 = 'def',
phone2 = 'def',
inn = 'def',
kpp = 'def',
ogrn = 'def',
compbal = 'default',
bank_account = 'default',
currency_account = 'default',
transit_currency_account = 'default',
itn = 'default',
spkmap = 'default',
spkmap_date = '11-11-1111',
map = 'default',
map_dateon = '11-11-1111',
map_datecount = '11-11-1111',
rtp = 'default',
rtp_date = '11-11-1111',
duties = 0,
dutieson = '11-11-1111',
dutiesoff = '11-11-1111',
insurance = 'default',
ins_name = 'default',
ins_dateon = '11-11-1111',
ins_dateoff = '11-11-1111',
fioip = 'default',
innip = 'def',
ogrnip = 'def',
dozvol = 'default',
doz_date = '11-11-1111',
doz_dateon = '11-11-1111',
doz_dateoff = '11-11-1111',
money = false,
dancar = false,
permission = 'default',
WHERE user_login = 'default';

CREATE TABLE IF NOT EXISTS tt.drivers
(
    user_login varchar,
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

INSERT INTO tt.DRIVERS (user_login, fiospec, post, fio_v, nation, inpassnum, idl, visa, visa_date, visa_dateon, visa_dateoff, iip) 
VALUES ('default', 'Иванов Иван Ивнович', 'Директор', 'Петров Павел Павлович', 'Русский', '123123123','na31mda','visa_default','11-11-1111','11-11-1111','11-11-1115', '12313123');

CREATE TABLE IF NOT EXISTS tt.auto
(
    user_login varchar,
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
    trailer varchar(10),
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

INSERT INTO tt.auto (user_login, type_auto, tnved, fuel_type, country_reg, auto_id, man_name, model, vinid, engine_volume, engine_hp, engine_id, book_value, card_numb, ecosign, date_to, off_take_year, ts_code, color, change_auto, eco, trailer, loadcap, axis, maxaxis, trailer_reg_country, trailer_regnum, trailer_man_name, trailer_model, trailer_type, trailer_dors, trailer_weight, trailer_pneumo, trailer_vinid, trailer_datecre, trailer_dim, trailer_color, trailer_off_country, trailer_bsp)
VALUES ('default', 'Седельный тягач', '8704229907', 'Газ', 'RUS', 'О888ОО 161', 'MAN', 'MAN-10', 'wman13zz09y232900', '4580', '179', '82031313', '5000000', '777rtY9', 'L', '2012-12-12', '2012-12-12', 'D', 'белый', 'отсутствуют', 'евро-5', 'Прицеп', '20000', '2', '10000', 'RUS', '1020AB', 'MAN', 'MAN-01', 'Цистерна', '1', '20000', '1', 'ABWGD456123', '12-12-2012', '3.2;2.5;12;70', 'красный', 'RUS', '3000000');