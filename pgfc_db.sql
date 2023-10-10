-- Adminer 4.8.1 PostgreSQL 16.0 dump

<br />
<b>Warning</b>:  Trying to access array offset on value of type bool in <b>C:\laragon\etc\apps\adminer\index.php</b> on line <b>586</b><br />
<br />
<b>Warning</b>:  Trying to access array offset on value of type bool in <b>C:\laragon\etc\apps\adminer\index.php</b> on line <b>586</b><br />
<br />
<b>Warning</b>:  Trying to access array offset on value of type bool in <b>C:\laragon\etc\apps\adminer\index.php</b> on line <b>586</b><br />
<br />
<b>Warning</b>:  Trying to access array offset on value of type bool in <b>C:\laragon\etc\apps\adminer\index.php</b> on line <b>586</b><br />
DROP TABLE IF EXISTS "Statistik";
DROP SEQUENCE IF EXISTS "Statistik_id_seq";
CREATE SEQUENCE "Statistik_id_seq" INCREMENT  MINVALUE  MAXVALUE  CACHE ;

CREATE TABLE "public"."Statistik" (
    "id" bigint DEFAULT nextval('"Statistik_id_seq"') NOT NULL,
    "id_statistik" character varying(255) NOT NULL,
    "id_tim" character varying(255) NOT NULL,
    "id_lomba" character varying(255) NOT NULL,
    "id_sekolah" character varying(255) NOT NULL,
    "id_user" character varying(255) NOT NULL,
    "menang" character varying(255) NOT NULL,
    "kalah" character varying(255) NOT NULL,
    "seri" character varying(255) NOT NULL,
    "poin" character varying(255) NOT NULL,
    "gol" character varying(255) NOT NULL,
    "gol_k" character varying(255) NOT NULL,
    "selisih" character varying(255) NOT NULL,
    "peringkat" character varying(255) NOT NULL,
    "grup" character varying(255) NOT NULL,
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "Statistik_pkey" PRIMARY KEY ("id")
) WITH (oids = false);


DROP TABLE IF EXISTS "data_sekolahs";
DROP SEQUENCE IF EXISTS data_sekolahs_id_seq;
CREATE SEQUENCE data_sekolahs_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."data_sekolahs" (
    "id" bigint DEFAULT nextval('data_sekolahs_id_seq') NOT NULL,
    "Nama_Sekolah" character varying(255) NOT NULL,
    "Telp" character varying(255) NOT NULL,
    "Fax" character varying(255),
    "Email" character varying(255),
    "password" character varying(255),
    "Tanggal_update" character varying(255),
    "Logo" character varying(255),
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "data_sekolahs_pkey" PRIMARY KEY ("id"),
    CONSTRAINT "data_sekolahs_telp_unique" UNIQUE ("Telp")
) WITH (oids = false);

INSERT INTO "data_sekolahs" ("id", "Nama_Sekolah", "Telp", "Fax", "Email", "password", "Tanggal_update", "Logo", "created_at", "updated_at") VALUES
(3,	'Sma Negeri 4 surabaya',	'08573563832647',	'24823y4',	'tegar8@gmail.com',	'Tegaro',	'15 Jnauary 2023',	'/logo/image',	NULL,	NULL);

DROP TABLE IF EXISTS "failed_jobs";
DROP SEQUENCE IF EXISTS failed_jobs_id_seq;
CREATE SEQUENCE failed_jobs_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."failed_jobs" (
    "id" bigint DEFAULT nextval('failed_jobs_id_seq') NOT NULL,
    "uuid" character varying(255) NOT NULL,
    "connection" text NOT NULL,
    "queue" text NOT NULL,
    "payload" text NOT NULL,
    "exception" text NOT NULL,
    "failed_at" timestamp(0) DEFAULT CURRENT_TIMESTAMP NOT NULL,
    CONSTRAINT "failed_jobs_pkey" PRIMARY KEY ("id"),
    CONSTRAINT "failed_jobs_uuid_unique" UNIQUE ("uuid")
) WITH (oids = false);


DROP TABLE IF EXISTS "grubs";
DROP SEQUENCE IF EXISTS grubs_id_seq;
CREATE SEQUENCE grubs_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."grubs" (
    "id" bigint DEFAULT nextval('grubs_id_seq') NOT NULL,
    "tim" character varying(255) NOT NULL,
    "main" character varying(255) NOT NULL,
    "menang" character varying(255) NOT NULL,
    "kalah" character varying(255) NOT NULL,
    "seri" character varying(255) NOT NULL,
    "poin" character varying(255) NOT NULL,
    "gol" character varying(255) NOT NULL,
    "gol_k" character varying(255) NOT NULL,
    "selisih" character varying(255) NOT NULL,
    "peringkat" character varying(255) NOT NULL,
    "grup" character varying(255) NOT NULL,
    "id_sekolah" character varying(255) NOT NULL,
    "id_user" character varying(255) NOT NULL,
    "id_lomba" character varying(255) NOT NULL,
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "grubs_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "grubs" ("id", "tim", "main", "menang", "kalah", "seri", "poin", "gol", "gol_k", "selisih", "peringkat", "grup", "id_sekolah", "id_user", "id_lomba", "created_at", "updated_at") VALUES
(1,	'Sma Negeri 8 Gresik',	'2',	'5',	'7',	'8',	'4',	'9',	'4',	'2',	'1',	'3',	'3',	'4',	'1',	NULL,	NULL);

DROP TABLE IF EXISTS "jadwals";
DROP SEQUENCE IF EXISTS jadwals_id_seq;
CREATE SEQUENCE jadwals_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."jadwals" (
    "id" bigint DEFAULT nextval('jadwals_id_seq') NOT NULL,
    "grup" character varying(255) NOT NULL,
    "id_grup" character varying(255) NOT NULL,
    "id_jadwal" character varying(255) NOT NULL,
    "id_tim" character varying(255) NOT NULL,
    "id_tim2" character varying(255) NOT NULL,
    "tanggal" character varying(255) NOT NULL,
    "mulai" character varying(255) NOT NULL,
    "selesai" character varying(255) NOT NULL,
    "status" character varying(255) NOT NULL,
    "skor" character varying(255) NOT NULL,
    "id_sekolah" character varying(255) NOT NULL,
    "id_user" character varying(255) NOT NULL,
    "id_lomba" character varying(255) NOT NULL,
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "jadwals_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "jadwals" ("id", "grup", "id_grup", "id_jadwal", "id_tim", "id_tim2", "tanggal", "mulai", "selesai", "status", "skor", "id_sekolah", "id_user", "id_lomba", "created_at", "updated_at") VALUES
(1,	'A',	'2',	'',	'98',	'03',	'15 January 2024',	'8.30',	'9.30',	'Selesai',	'5',	'1',	'',	'',	NULL,	NULL),
(2,	'A',	'1',	'',	'84',	'45',	'17 January 2025',	'09.00',	'10.00',	'Comin  soon',	'',	'1',	'',	'',	NULL,	NULL),
(3,	'B',	'3',	'',	'5',	'6',	'29 September 2023',	'09.00',	'11.00',	'Selesai',	'',	'',	'',	'',	NULL,	NULL);

DROP TABLE IF EXISTS "migrations";
DROP SEQUENCE IF EXISTS migrations_id_seq;
CREATE SEQUENCE migrations_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1;

CREATE TABLE "public"."migrations" (
    "id" integer DEFAULT nextval('migrations_id_seq') NOT NULL,
    "migration" character varying(255) NOT NULL,
    "batch" integer NOT NULL,
    CONSTRAINT "migrations_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "migrations" ("id", "migration", "batch") VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_reset_tokens_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(4,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(5,	'2023_09_16_162207_referal_network',	1),
(6,	'2023_09_18_003746_create__data_sekolah',	1),
(7,	'2023_09_20_132627_create__grup_futsal',	1),
(8,	'2023_09_20_142521_grubs',	2),
(10,	'2023_09_21_005831_jadwal',	3),
(11,	'2023_09_21_035137_statistik',	4);

DROP TABLE IF EXISTS "networks";
DROP SEQUENCE IF EXISTS networks_id_seq;
CREATE SEQUENCE networks_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."networks" (
    "id" bigint DEFAULT nextval('networks_id_seq') NOT NULL,
    "referral_code" character varying(255) NOT NULL,
    "user_id" character varying(255) NOT NULL,
    "parent_user_id" character varying(255) NOT NULL,
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "networks_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "networks" ("id", "referral_code", "user_id", "parent_user_id", "created_at", "updated_at") VALUES
(1,	'OH3FMVPC',	'7',	'6',	NULL,	NULL),
(2,	'w6FWr7i9',	'8',	'7',	NULL,	NULL),
(3,	'oy0xgmV3',	'10',	'9',	NULL,	NULL),
(4,	'd0kUclUq',	'18',	'17',	NULL,	NULL),
(5,	'zJTuxDba',	'21',	'18',	NULL,	NULL),
(6,	'a9C1qhav',	'22',	'21',	NULL,	NULL);

DROP TABLE IF EXISTS "password_reset_tokens";
CREATE TABLE "public"."password_reset_tokens" (
    "email" character varying(255) NOT NULL,
    "token" character varying(255) NOT NULL,
    "created_at" timestamp(0),
    CONSTRAINT "password_reset_tokens_pkey" PRIMARY KEY ("email")
) WITH (oids = false);


DROP TABLE IF EXISTS "personal_access_tokens";
DROP SEQUENCE IF EXISTS personal_access_tokens_id_seq;
CREATE SEQUENCE personal_access_tokens_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."personal_access_tokens" (
    "id" bigint DEFAULT nextval('personal_access_tokens_id_seq') NOT NULL,
    "tokenable_type" character varying(255) NOT NULL,
    "tokenable_id" bigint NOT NULL,
    "name" character varying(255) NOT NULL,
    "token" character varying(64) NOT NULL,
    "abilities" text,
    "last_used_at" timestamp(0),
    "expires_at" timestamp(0),
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "personal_access_tokens_pkey" PRIMARY KEY ("id"),
    CONSTRAINT "personal_access_tokens_token_unique" UNIQUE ("token")
) WITH (oids = false);

CREATE INDEX "personal_access_tokens_tokenable_type_tokenable_id_index" ON "public"."personal_access_tokens" USING btree ("tokenable_type", "tokenable_id");


DROP TABLE IF EXISTS "users";
DROP SEQUENCE IF EXISTS users_id_seq;
CREATE SEQUENCE users_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."users" (
    "id" bigint DEFAULT nextval('users_id_seq') NOT NULL,
    "name" character varying(255) NOT NULL,
    "email" character varying(255) NOT NULL,
    "email_verified_at" timestamp(0),
    "referral_code" character varying(255),
    "password" character varying(255) NOT NULL,
    "remember_token" character varying(100),
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    "role_as" character varying(20) DEFAULT '0' NOT NULL,
    CONSTRAINT "users_email_unique" UNIQUE ("email"),
    CONSTRAINT "users_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "users" ("id", "name", "email", "email_verified_at", "referral_code", "password", "remember_token", "created_at", "updated_at", "role_as") VALUES
(18,	'4',	'illham@gmail.com',	NULL,	'zJTuxDba',	'$2y$10$9.iT8KqcpG.8Vtvz6iif2uUYqDDLSHpKFkcBrMJl5LsNLrnU1lzxC',	'miSnVauPgX6Q5HXQrUxjnhca1DCmwBbgRgLQzfpBzT9TBt2wNcn99qCglzF',	NULL,	NULL,	'0'),
(21,	'y',	'tegarilham4444@gmail.com',	NULL,	'a9C1qhav',	'$2y$10$hEfDwisds.QGmM9UbEYy9u0iM4AEy.oFBHZ69iwOp7emFnV2t3P/G',	'w7dM5mB5VeF3ZcuBsLhJgvAgPZpE4CFqFxShjzSPvU4QdLA0nA5pd9JdKFn',	NULL,	NULL,	'0'),
(22,	'p',	'tegar44@gmail.com',	NULL,	'd3bWfCzl',	'$2y$10$m0rDv/JIhSI8s46sRjIvP.EmKBw75ZHb7RlYXOn1ZSUjbtonB3NSm',	'ICtzytVCwjEsN5BDtdhf3nFRFtHQ0vDXeLODoq0MXwIguE5N2aU8K4ELChT',	NULL,	NULL,	'0');

-- 2023-10-10 20:43:27.668024+07
