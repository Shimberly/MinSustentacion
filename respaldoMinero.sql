--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.5
-- Dumped by pg_dump version 9.5.5

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: actualizacion; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE actualizacion (
    id_actualizacion integer NOT NULL,
    id_reporte integer,
    fecha date,
    hora time with time zone
);


ALTER TABLE actualizacion OWNER TO postgres;

--
-- Name: actualizacion_id_actualizacion_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE actualizacion_id_actualizacion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE actualizacion_id_actualizacion_seq OWNER TO postgres;

--
-- Name: actualizacion_id_actualizacion_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE actualizacion_id_actualizacion_seq OWNED BY actualizacion.id_actualizacion;


--
-- Name: administrador; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE administrador (
    id_admin integer NOT NULL,
    nro_usuarios_empleados integer
);


ALTER TABLE administrador OWNER TO postgres;

--
-- Name: administrador_id_admin_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE administrador_id_admin_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE administrador_id_admin_seq OWNER TO postgres;

--
-- Name: administrador_id_admin_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE administrador_id_admin_seq OWNED BY administrador.id_admin;


--
-- Name: ciudad; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE ciudad (
    id_ciudad integer NOT NULL,
    nombre character varying(50),
    id_provincia integer
);


ALTER TABLE ciudad OWNER TO postgres;

--
-- Name: ciudad_id_ciudad_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE ciudad_id_ciudad_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ciudad_id_ciudad_seq OWNER TO postgres;

--
-- Name: ciudad_id_ciudad_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE ciudad_id_ciudad_seq OWNED BY ciudad.id_ciudad;


--
-- Name: datosTunel; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE "datosTunel" (
    "id_datosTunel" integer NOT NULL,
    oxigeno double precision,
    metano double precision
);


ALTER TABLE "datosTunel" OWNER TO postgres;

--
-- Name: datosTunel_id_datosTunel_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "datosTunel_id_datosTunel_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE "datosTunel_id_datosTunel_seq" OWNER TO postgres;

--
-- Name: datosTunel_id_datosTunel_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "datosTunel_id_datosTunel_seq" OWNED BY "datosTunel"."id_datosTunel";


--
-- Name: dron; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE dron (
    id_dron integer NOT NULL,
    marca character varying(50),
    num_serial character varying(60),
    peso double precision
);


ALTER TABLE dron OWNER TO postgres;

--
-- Name: dron_id_dron_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE dron_id_dron_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dron_id_dron_seq OWNER TO postgres;

--
-- Name: dron_id_dron_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE dron_id_dron_seq OWNED BY dron.id_dron;


--
-- Name: empresa; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE empresa (
    id_empresa integer NOT NULL,
    "razonSocial" character varying(80),
    ruc character varying(50),
    contacto character varying(80)
);


ALTER TABLE empresa OWNER TO postgres;

--
-- Name: empresa_id_empresa_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE empresa_id_empresa_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE empresa_id_empresa_seq OWNER TO postgres;

--
-- Name: empresa_id_empresa_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE empresa_id_empresa_seq OWNED BY empresa.id_empresa;


--
-- Name: intervalos_monitoreo; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE intervalos_monitoreo (
    id_monitoreo integer NOT NULL,
    id_dron integer,
    id_datos_tunel integer
);


ALTER TABLE intervalos_monitoreo OWNER TO postgres;

--
-- Name: intervalos_monitoreo_id_monitoreo_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE intervalos_monitoreo_id_monitoreo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE intervalos_monitoreo_id_monitoreo_seq OWNER TO postgres;

--
-- Name: intervalos_monitoreo_id_monitoreo_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE intervalos_monitoreo_id_monitoreo_seq OWNED BY intervalos_monitoreo.id_monitoreo;


--
-- Name: pais; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE pais (
    id_pais integer NOT NULL,
    nombre character varying(50),
    ubicacion character varying(50)
);


ALTER TABLE pais OWNER TO postgres;

--
-- Name: pais_id_pais_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE pais_id_pais_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE pais_id_pais_seq OWNER TO postgres;

--
-- Name: pais_id_pais_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE pais_id_pais_seq OWNED BY pais.id_pais;


--
-- Name: persona; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE persona (
    id_persona integer NOT NULL,
    nombre character varying,
    apellido character varying,
    documento_identificacion character varying(50),
    email character varying(77),
    genero character varying(10),
    "fechaDeNacimiento" character varying(50),
    usuario character varying(50),
    clave character varying,
    id_usuario_empleado integer,
    id_admin integer,
    id_actualizacion integer
);


ALTER TABLE persona OWNER TO postgres;

--
-- Name: persona_id_persona_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE persona_id_persona_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE persona_id_persona_seq OWNER TO postgres;

--
-- Name: persona_id_persona_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE persona_id_persona_seq OWNED BY persona.id_persona;


--
-- Name: produccion; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE produccion (
    id_produccion integer NOT NULL,
    peso double precision
);


ALTER TABLE produccion OWNER TO postgres;

--
-- Name: produccion_id_produccion_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE produccion_id_produccion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE produccion_id_produccion_seq OWNER TO postgres;

--
-- Name: produccion_id_produccion_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE produccion_id_produccion_seq OWNED BY produccion.id_produccion;


--
-- Name: provincia; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE provincia (
    id_provincia integer NOT NULL,
    nombre character varying(50),
    id_pais integer
);


ALTER TABLE provincia OWNER TO postgres;

--
-- Name: provincia_id_provincia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE provincia_id_provincia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE provincia_id_provincia_seq OWNER TO postgres;

--
-- Name: provincia_id_provincia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE provincia_id_provincia_seq OWNED BY provincia.id_provincia;


--
-- Name: reporteDeTuneles; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE "reporteDeTuneles" (
    id_reporte integer NOT NULL,
    id_monitoreo integer,
    id_produccion integer,
    id_tunel integer,
    id_empresa integer
);


ALTER TABLE "reporteDeTuneles" OWNER TO postgres;

--
-- Name: reporteDeTuneles_id_reporte_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "reporteDeTuneles_id_reporte_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE "reporteDeTuneles_id_reporte_seq" OWNER TO postgres;

--
-- Name: reporteDeTuneles_id_reporte_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "reporteDeTuneles_id_reporte_seq" OWNED BY "reporteDeTuneles".id_reporte;


--
-- Name: tunel; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE tunel (
    id_tunel integer NOT NULL,
    ubicacion character varying(50),
    id_ciudad integer
);


ALTER TABLE tunel OWNER TO postgres;

--
-- Name: tunel_id_tunel_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tunel_id_tunel_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tunel_id_tunel_seq OWNER TO postgres;

--
-- Name: tunel_id_tunel_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tunel_id_tunel_seq OWNED BY tunel.id_tunel;


--
-- Name: usuario_empleado; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE usuario_empleado (
    id_usuario_empleado integer NOT NULL,
    fecha_registro character varying(50)
);


ALTER TABLE usuario_empleado OWNER TO postgres;

--
-- Name: usuario_empleado_id_usuario_empleado_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE usuario_empleado_id_usuario_empleado_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE usuario_empleado_id_usuario_empleado_seq OWNER TO postgres;

--
-- Name: usuario_empleado_id_usuario_empleado_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE usuario_empleado_id_usuario_empleado_seq OWNED BY usuario_empleado.id_usuario_empleado;


--
-- Name: id_actualizacion; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY actualizacion ALTER COLUMN id_actualizacion SET DEFAULT nextval('actualizacion_id_actualizacion_seq'::regclass);


--
-- Name: id_admin; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY administrador ALTER COLUMN id_admin SET DEFAULT nextval('administrador_id_admin_seq'::regclass);


--
-- Name: id_ciudad; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY ciudad ALTER COLUMN id_ciudad SET DEFAULT nextval('ciudad_id_ciudad_seq'::regclass);


--
-- Name: id_datosTunel; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "datosTunel" ALTER COLUMN "id_datosTunel" SET DEFAULT nextval('"datosTunel_id_datosTunel_seq"'::regclass);


--
-- Name: id_dron; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY dron ALTER COLUMN id_dron SET DEFAULT nextval('dron_id_dron_seq'::regclass);


--
-- Name: id_empresa; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY empresa ALTER COLUMN id_empresa SET DEFAULT nextval('empresa_id_empresa_seq'::regclass);


--
-- Name: id_monitoreo; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY intervalos_monitoreo ALTER COLUMN id_monitoreo SET DEFAULT nextval('intervalos_monitoreo_id_monitoreo_seq'::regclass);


--
-- Name: id_pais; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY pais ALTER COLUMN id_pais SET DEFAULT nextval('pais_id_pais_seq'::regclass);


--
-- Name: id_persona; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY persona ALTER COLUMN id_persona SET DEFAULT nextval('persona_id_persona_seq'::regclass);


--
-- Name: id_produccion; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY produccion ALTER COLUMN id_produccion SET DEFAULT nextval('produccion_id_produccion_seq'::regclass);


--
-- Name: id_provincia; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY provincia ALTER COLUMN id_provincia SET DEFAULT nextval('provincia_id_provincia_seq'::regclass);


--
-- Name: id_reporte; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "reporteDeTuneles" ALTER COLUMN id_reporte SET DEFAULT nextval('"reporteDeTuneles_id_reporte_seq"'::regclass);


--
-- Name: id_tunel; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tunel ALTER COLUMN id_tunel SET DEFAULT nextval('tunel_id_tunel_seq'::regclass);


--
-- Name: id_usuario_empleado; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario_empleado ALTER COLUMN id_usuario_empleado SET DEFAULT nextval('usuario_empleado_id_usuario_empleado_seq'::regclass);


--
-- Data for Name: actualizacion; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY actualizacion (id_actualizacion, id_reporte, fecha, hora) FROM stdin;
\.


--
-- Name: actualizacion_id_actualizacion_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('actualizacion_id_actualizacion_seq', 1, false);


--
-- Data for Name: administrador; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY administrador (id_admin, nro_usuarios_empleados) FROM stdin;
\.


--
-- Name: administrador_id_admin_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('administrador_id_admin_seq', 1, false);


--
-- Data for Name: ciudad; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY ciudad (id_ciudad, nombre, id_provincia) FROM stdin;
\.


--
-- Name: ciudad_id_ciudad_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('ciudad_id_ciudad_seq', 1, false);


--
-- Data for Name: datosTunel; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "datosTunel" ("id_datosTunel", oxigeno, metano) FROM stdin;
\.


--
-- Name: datosTunel_id_datosTunel_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"datosTunel_id_datosTunel_seq"', 1, false);


--
-- Data for Name: dron; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY dron (id_dron, marca, num_serial, peso) FROM stdin;
\.


--
-- Name: dron_id_dron_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('dron_id_dron_seq', 1, false);


--
-- Data for Name: empresa; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY empresa (id_empresa, "razonSocial", ruc, contacto) FROM stdin;
\.


--
-- Name: empresa_id_empresa_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('empresa_id_empresa_seq', 1, false);


--
-- Data for Name: intervalos_monitoreo; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY intervalos_monitoreo (id_monitoreo, id_dron, id_datos_tunel) FROM stdin;
\.


--
-- Name: intervalos_monitoreo_id_monitoreo_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('intervalos_monitoreo_id_monitoreo_seq', 1, false);


--
-- Data for Name: pais; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY pais (id_pais, nombre, ubicacion) FROM stdin;
\.


--
-- Name: pais_id_pais_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('pais_id_pais_seq', 1, false);


--
-- Data for Name: persona; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY persona (id_persona, nombre, apellido, documento_identificacion, email, genero, "fechaDeNacimiento", usuario, clave, id_usuario_empleado, id_admin, id_actualizacion) FROM stdin;
\.


--
-- Name: persona_id_persona_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('persona_id_persona_seq', 1, false);


--
-- Data for Name: produccion; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY produccion (id_produccion, peso) FROM stdin;
\.


--
-- Name: produccion_id_produccion_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('produccion_id_produccion_seq', 1, false);


--
-- Data for Name: provincia; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY provincia (id_provincia, nombre, id_pais) FROM stdin;
\.


--
-- Name: provincia_id_provincia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('provincia_id_provincia_seq', 1, false);


--
-- Data for Name: reporteDeTuneles; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "reporteDeTuneles" (id_reporte, id_monitoreo, id_produccion, id_tunel, id_empresa) FROM stdin;
\.


--
-- Name: reporteDeTuneles_id_reporte_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"reporteDeTuneles_id_reporte_seq"', 1, false);


--
-- Data for Name: tunel; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tunel (id_tunel, ubicacion, id_ciudad) FROM stdin;
\.


--
-- Name: tunel_id_tunel_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tunel_id_tunel_seq', 1, false);


--
-- Data for Name: usuario_empleado; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY usuario_empleado (id_usuario_empleado, fecha_registro) FROM stdin;
\.


--
-- Name: usuario_empleado_id_usuario_empleado_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('usuario_empleado_id_usuario_empleado_seq', 1, false);


--
-- Name: id_actualizacion_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY actualizacion
    ADD CONSTRAINT id_actualizacion_pk PRIMARY KEY (id_actualizacion);


--
-- Name: id_admin_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY administrador
    ADD CONSTRAINT id_admin_pk PRIMARY KEY (id_admin);


--
-- Name: id_ciudad_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY ciudad
    ADD CONSTRAINT id_ciudad_pk PRIMARY KEY (id_ciudad);


--
-- Name: id_datosTunel_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "datosTunel"
    ADD CONSTRAINT "id_datosTunel_pk" PRIMARY KEY ("id_datosTunel");


--
-- Name: id_dron_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY dron
    ADD CONSTRAINT id_dron_pk PRIMARY KEY (id_dron);


--
-- Name: id_empresa_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY empresa
    ADD CONSTRAINT id_empresa_pk PRIMARY KEY (id_empresa);


--
-- Name: id_monitoreo_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY intervalos_monitoreo
    ADD CONSTRAINT id_monitoreo_pk PRIMARY KEY (id_monitoreo);


--
-- Name: id_pais_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY pais
    ADD CONSTRAINT id_pais_pk PRIMARY KEY (id_pais);


--
-- Name: id_persona_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY persona
    ADD CONSTRAINT id_persona_pk PRIMARY KEY (id_persona);


--
-- Name: id_produccion_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY produccion
    ADD CONSTRAINT id_produccion_pk PRIMARY KEY (id_produccion);


--
-- Name: id_provincia_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY provincia
    ADD CONSTRAINT id_provincia_pk PRIMARY KEY (id_provincia);


--
-- Name: id_reporte_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "reporteDeTuneles"
    ADD CONSTRAINT id_reporte_pk PRIMARY KEY (id_reporte);


--
-- Name: id_tunel_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tunel
    ADD CONSTRAINT id_tunel_pk PRIMARY KEY (id_tunel);


--
-- Name: id_user_empleado; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario_empleado
    ADD CONSTRAINT id_user_empleado PRIMARY KEY (id_usuario_empleado);


--
-- Name: fki_id_actualizacion_fk; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_id_actualizacion_fk ON persona USING btree (id_actualizacion);


--
-- Name: fki_id_admin_fk; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_id_admin_fk ON persona USING btree (id_admin);


--
-- Name: fki_id_ciudad; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_id_ciudad ON tunel USING btree (id_ciudad);


--
-- Name: fki_id_datosTunel; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX "fki_id_datosTunel" ON intervalos_monitoreo USING btree (id_datos_tunel);


--
-- Name: fki_id_dron_fk; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_id_dron_fk ON intervalos_monitoreo USING btree (id_dron);


--
-- Name: fki_id_empresa_fk; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_id_empresa_fk ON "reporteDeTuneles" USING btree (id_empresa);


--
-- Name: fki_id_monitoreo_fk; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_id_monitoreo_fk ON "reporteDeTuneles" USING btree (id_monitoreo);


--
-- Name: fki_id_pais_fk; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_id_pais_fk ON provincia USING btree (id_pais);


--
-- Name: fki_id_produccion_fk; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_id_produccion_fk ON "reporteDeTuneles" USING btree (id_produccion);


--
-- Name: fki_id_provincia_fk; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_id_provincia_fk ON ciudad USING btree (id_provincia);


--
-- Name: fki_id_tunel_fk; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_id_tunel_fk ON "reporteDeTuneles" USING btree (id_tunel);


--
-- Name: fki_id_usuario_empleado_fk; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_id_usuario_empleado_fk ON persona USING btree (id_usuario_empleado);


--
-- Name: id_actualizacion_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY persona
    ADD CONSTRAINT id_actualizacion_fk FOREIGN KEY (id_actualizacion) REFERENCES actualizacion(id_actualizacion);


--
-- Name: id_admin_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY persona
    ADD CONSTRAINT id_admin_fk FOREIGN KEY (id_admin) REFERENCES administrador(id_admin);


--
-- Name: id_ciudad; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tunel
    ADD CONSTRAINT id_ciudad FOREIGN KEY (id_ciudad) REFERENCES ciudad(id_ciudad);


--
-- Name: id_datosTunel; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY intervalos_monitoreo
    ADD CONSTRAINT "id_datosTunel" FOREIGN KEY (id_datos_tunel) REFERENCES "datosTunel"("id_datosTunel");


--
-- Name: id_dron_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY intervalos_monitoreo
    ADD CONSTRAINT id_dron_fk FOREIGN KEY (id_dron) REFERENCES dron(id_dron);


--
-- Name: id_empresa_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "reporteDeTuneles"
    ADD CONSTRAINT id_empresa_fk FOREIGN KEY (id_empresa) REFERENCES empresa(id_empresa);


--
-- Name: id_monitoreo_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "reporteDeTuneles"
    ADD CONSTRAINT id_monitoreo_fk FOREIGN KEY (id_monitoreo) REFERENCES intervalos_monitoreo(id_monitoreo);


--
-- Name: id_pais_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY provincia
    ADD CONSTRAINT id_pais_fk FOREIGN KEY (id_pais) REFERENCES pais(id_pais);


--
-- Name: id_produccion_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "reporteDeTuneles"
    ADD CONSTRAINT id_produccion_fk FOREIGN KEY (id_produccion) REFERENCES produccion(id_produccion);


--
-- Name: id_provincia_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY ciudad
    ADD CONSTRAINT id_provincia_fk FOREIGN KEY (id_provincia) REFERENCES provincia(id_provincia);


--
-- Name: id_tunel_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "reporteDeTuneles"
    ADD CONSTRAINT id_tunel_fk FOREIGN KEY (id_tunel) REFERENCES tunel(id_tunel);


--
-- Name: id_usuario_empleado_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY persona
    ADD CONSTRAINT id_usuario_empleado_fk FOREIGN KEY (id_usuario_empleado) REFERENCES usuario_empleado(id_usuario_empleado);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

