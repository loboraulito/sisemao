--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.12
-- Dumped by pg_dump version 9.6.12

-- Started on 2022-08-02 09:20:41

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 192 (class 1259 OID 75327088)
-- Name: planilla; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.planilla (
    id_planilla integer NOT NULL,
    tipo_documento character varying(1024),
    dip character varying(1024),
    exp character varying(1024),
    fecha_nacimiento date,
    edad integer,
    turno character varying(1024),
    paterno character varying(1024),
    materno character varying(1024),
    nombres character varying(1024),
    pais character varying(1024),
    sexo character varying(1024),
    jubilado integer,
    aporte_afp integer,
    discapacidad integer,
    tutor integer,
    fecha_ingreso date,
    fecha_retiro date,
    motivo_retiro integer,
    caja_salud integer,
    afp_aporta integer,
    nua_cua integer,
    sucursal integer,
    clasificacion character varying(1024),
    cargo character varying(1024),
    modalidad_contrato integer,
    tipo_contrato integer,
    dias_pagados integer,
    horas_pagadas integer,
    haber_basico numeric(10,2),
    dias numeric(10,2),
    total_dias_trabajados numeric(10,2),
    anios_antiguedad numeric(10,2),
    porcentaje_bono_antiguedad numeric(10,2),
    bono_antiguedad numeric(10,2),
    horas_extra numeric(10,2),
    monto_horas_extra numeric(10,2),
    horas_recargo_nocturno integer,
    monto_horas_recargo_nocturno numeric(10,2),
    feriados integer,
    monto_feriados numeric(10,2),
    pagos_2 integer,
    domintos_trabajados integer,
    monto_domintos_trabajados numeric(10,2),
    toneladas numeric(10,2),
    monto_toneladas numeric(10,2),
    total_tonelaje numeric(10,2),
    p_av numeric(10,2),
    p_aw numeric(10,2),
    p_ax numeric(10,2),
    bono_produccion numeric(10,2),
    total_tonelaje_tripulacion numeric(10,2),
    p_ba numeric(10,2),
    p_bb numeric(10,2),
    p_bc numeric(10,2),
    total_tonelaje2 numeric(10,2),
    total_tonelaje3 numeric(10,2),
    monto_a_cancelar_tonelaje numeric(10,2),
    total_ganado numeric(10,2),
    cot_mens_afp numeric(10,2),
    r_comun_afp numeric(10,2),
    comision_afp numeric(10,2),
    apo_sol_afp numeric(10,2),
    aporte_afp2 numeric(10,2),
    aporte_sindicato numeric(10,2),
    marcacion_fuera_de_horario integer,
    monto_fuera_de_horario numeric(10,2),
    faltas integer,
    monto_faltas numeric(10,2),
    abandones integer,
    monto_abandonos numeric(10,2),
    retrasos integer,
    total_retrasos numeric(10,2),
    multas_sindicato integer,
    apoyo_trabajador numeric(10,2),
    retencion_judicial integer,
    otros_descuentos numeric(10,2),
    rc_iva integer,
    finiquito numeric(10,2),
    total_descuentos numeric(10,2),
    total_cancelar numeric(10,2),
    centros_de_costo numeric(10,2),
    cuenta text,
    centros_de_costo_2 numeric(10,2),
    nombre_planilla_asistencia character varying(1024),
    planilla_mes_num integer NOT NULL,
    planilla_anio integer NOT NULL
);


ALTER TABLE public.planilla OWNER TO postgres;

--
-- TOC entry 191 (class 1259 OID 75327086)
-- Name: planilla_id_planilla_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.planilla_id_planilla_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.planilla_id_planilla_seq OWNER TO postgres;

--
-- TOC entry 2173 (class 0 OID 0)
-- Dependencies: 191
-- Name: planilla_id_planilla_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.planilla_id_planilla_seq OWNED BY public.planilla.id_planilla;


--
-- TOC entry 186 (class 1259 OID 75327039)
-- Name: rol; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.rol (
    id_rol integer NOT NULL,
    rol text NOT NULL
);


ALTER TABLE public.rol OWNER TO postgres;

--
-- TOC entry 185 (class 1259 OID 75327037)
-- Name: rol_id_rol_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.rol_id_rol_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.rol_id_rol_seq OWNER TO postgres;

--
-- TOC entry 2174 (class 0 OID 0)
-- Dependencies: 185
-- Name: rol_id_rol_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.rol_id_rol_seq OWNED BY public.rol.id_rol;


--
-- TOC entry 188 (class 1259 OID 75327048)
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.usuario (
    id_usuario integer NOT NULL,
    usuario text NOT NULL,
    clave text NOT NULL,
    nombre text NOT NULL,
    id_estado boolean DEFAULT true NOT NULL
);


ALTER TABLE public.usuario OWNER TO postgres;

--
-- TOC entry 187 (class 1259 OID 75327046)
-- Name: usuario_id_usuario_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.usuario_id_usuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuario_id_usuario_seq OWNER TO postgres;

--
-- TOC entry 2175 (class 0 OID 0)
-- Dependencies: 187
-- Name: usuario_id_usuario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.usuario_id_usuario_seq OWNED BY public.usuario.id_usuario;


--
-- TOC entry 190 (class 1259 OID 75327058)
-- Name: usuario_rol; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.usuario_rol (
    id_usuario_rol integer NOT NULL,
    id_rol integer NOT NULL,
    id_usuario integer NOT NULL,
    id_estado boolean DEFAULT true NOT NULL
);


ALTER TABLE public.usuario_rol OWNER TO postgres;

--
-- TOC entry 189 (class 1259 OID 75327056)
-- Name: usuario_rol_id_usuario_rol_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.usuario_rol_id_usuario_rol_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuario_rol_id_usuario_rol_seq OWNER TO postgres;

--
-- TOC entry 2176 (class 0 OID 0)
-- Dependencies: 189
-- Name: usuario_rol_id_usuario_rol_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.usuario_rol_id_usuario_rol_seq OWNED BY public.usuario_rol.id_usuario_rol;


--
-- TOC entry 2027 (class 2604 OID 75327091)
-- Name: planilla id_planilla; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.planilla ALTER COLUMN id_planilla SET DEFAULT nextval('public.planilla_id_planilla_seq'::regclass);


--
-- TOC entry 2022 (class 2604 OID 75327042)
-- Name: rol id_rol; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.rol ALTER COLUMN id_rol SET DEFAULT nextval('public.rol_id_rol_seq'::regclass);


--
-- TOC entry 2023 (class 2604 OID 75327051)
-- Name: usuario id_usuario; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario ALTER COLUMN id_usuario SET DEFAULT nextval('public.usuario_id_usuario_seq'::regclass);


--
-- TOC entry 2025 (class 2604 OID 75327061)
-- Name: usuario_rol id_usuario_rol; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario_rol ALTER COLUMN id_usuario_rol SET DEFAULT nextval('public.usuario_rol_id_usuario_rol_seq'::regclass);


--
-- TOC entry 2166 (class 0 OID 75327088)
-- Dependencies: 192
-- Data for Name: planilla; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.planilla VALUES (2, '', '2749648', 'OR', '1957-01-01', 65, 'DIURNO', 'ADRIAN', 'LOPEZ', 'DANIEL', 'Bolivia', 'M', 0, 1, 0, 0, '2010-08-03', NULL, NULL, 2, 2, 33457797, 1, '', 'CONDUCTOR I - RECOLECCIÓN', 1, 1, 30, 8, 2644.16, 88.14, 2644.16, NULL, 11.00, 247.50, 18.00, 396.62, 1, 35.26, NULL, 0.00, NULL, 1, 176.28, 162.49, 341.23, NULL, 0.00, NULL, 0.00, 0.00, NULL, 0.00, 162.49, 341.23, 503.72, 162.49, 341.00, 3841.05, 384.11, 0.00, 19.21, 19.21, 422.53, 26.44, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0.00, NULL, NULL, NULL, NULL, 0, NULL, 448.97, 3392.08, 2.00, '10000022500876', 2.00, 'RECOLECCION', 6, 2022);
INSERT INTO public.planilla VALUES (3, '', '7427901', 'OR', '1994-05-09', 29, '', 'AJHUACHO', 'AJHUACHO', 'MIGUEL ANGEL', 'Bolivia', 'M', 0, 1, 0, 0, '2013-07-11', NULL, NULL, 2, 2, 43661725, 1, '', 'AYUDANTE - RECOLECCIÓN', 1, 1, 30, 8, 2250.00, 75.00, 2250.00, NULL, 0.00, 0.00, 39.99, 749.81, NULL, 0.00, 2, 300.00, NULL, 3, 450.00, 373.04, 746.08, NULL, 0.00, NULL, 0.00, 0.00, 373.04, 746.08, NULL, 0.00, 746.08, 373.04, 746.00, 4495.89, 449.59, 76.88, 22.48, 22.48, 571.43, 22.50, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0.00, NULL, NULL, NULL, NULL, 0, NULL, 593.93, 3901.96, 2.00, '10000022500925', 3.00, 'RECOLECCION', 6, 2022);
INSERT INTO public.planilla VALUES (4, '', '3518097', 'OR', '1972-02-09', 50, '', 'ALANES', 'LUIZAGA', 'ROXANA', 'Bolivia', 'F', 0, 1, 0, 0, '2006-11-02', NULL, NULL, 2, 2, 33106204, 1, '', 'OPERADOR DE LIMPIEZA', 1, 1, 30, 8, 2250.00, 75.00, 2250.00, NULL, 26.00, 585.00, NULL, 0.00, 29, 870.00, 2, 300.00, NULL, 3, 450.00, 0.00, 0.00, NULL, 0.00, NULL, 0.00, 0.00, NULL, 0.00, NULL, 0.00, 0.00, 0.00, 0.00, 4455.00, 445.50, 76.18, 22.28, 22.28, 566.24, 22.50, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0.00, NULL, NULL, NULL, NULL, 0, NULL, 588.74, 3866.26, 3.00, '10000022475756', 3.10, 'NOCTURNO', 6, 2022);
INSERT INTO public.planilla VALUES (5, '', '3117878', 'OR', '1971-04-03', 53, '', 'ALANES', 'LUIZAGA', 'TERESA', 'Bolivia', 'F', 0, 1, 0, 0, '2006-11-02', NULL, NULL, 2, 2, 33106198, 1, '', 'OPERADOR DE LIMPIEZA', 1, 1, 29, 8, 2250.00, 75.00, 2175.00, NULL, 18.00, 405.00, 0.00, 0.00, NULL, 0.00, 0, 0.00, NULL, NULL, 0.00, 0.00, 0.00, NULL, 0.00, NULL, 0.00, 0.00, NULL, 0.00, NULL, 0.00, 0.00, 0.00, 0.00, 2580.00, 258.00, 44.12, 12.90, 12.90, 327.92, 22.50, 0, 0.00, 1, 75.00, 0, 0.00, 1, 0.00, NULL, NULL, NULL, NULL, 0, NULL, 425.42, 2154.58, 3.00, '10000022486159', 3.00, 'BARRIDO BASE CENTRAL', 6, 2022);
INSERT INTO public.planilla VALUES (7, '', '5067255', 'OR', '1981-12-03', 42, '', 'ALAS', 'TORRES', 'ROBERTO CARLOS', 'Bolivia', 'M', 0, 1, 0, 0, '2023-09-03', '2023-01-06', 2, 2, 2, 40989793, 1, '', 'ADMINISTRADOR DE RECURSOS HUMANOS', 2, 1, 13, 8, 5200.00, 173.33, 2253.33, NULL, 0.00, 0.00, NULL, 0.00, NULL, 0.00, NULL, 0.00, NULL, NULL, 0.00, 0.00, 0.00, NULL, 0.00, NULL, 0.00, NULL, NULL, 0.00, NULL, 0.00, 0.00, 0.00, 0.00, 2253.33, 225.33, 38.53, 11.27, 11.27, 286.40, NULL, 0, 0.00, 0, 0.00, 0, 0.00, 6, 37.56, NULL, NULL, NULL, 888.35, 0, NULL, 1212.31, 1041.02, 1.10, '10000028975841', 1.10, 'ADMINISTRATIVO', 6, 2022);
INSERT INTO public.planilla VALUES (8, '', '7382316', 'LP', '2002-04-10', 19, '', 'ALVARADO', 'COLQUE', 'JHOEL', 'Bolivia', 'M', 0, 1, 0, 0, '2021-08-07', NULL, NULL, 2, 2, 7382316, 1, '', 'AYUDANTE - RECOLECCIÓN', 2, 1, 30, 8, 2250.00, 75.00, 2250.00, NULL, 0.00, 0.00, NULL, 0.00, 0, 0.00, 2, 300.00, NULL, 2, 300.00, 271.16, 569.44, 271.16, 569.44, NULL, 0.00, 569.44, NULL, 0.00, NULL, 0.00, 0.00, 271.16, 569.44, 3419.44, 341.94, 58.47, 17.10, 17.10, 434.61, NULL, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0.00, NULL, NULL, NULL, NULL, 0, NULL, 434.61, 2984.83, 2.10, '10000042226650', 3.00, 'NOCTURNO', 6, 2022);
INSERT INTO public.planilla VALUES (9, '', '4054189', 'OR', '1977-03-08', 46, '', 'ALVARADO', 'FLORES', 'AGUSTINA', 'Bolivia', 'F', 0, 1, 0, 0, '2018-10-05', NULL, NULL, 2, 1, 49289019, 1, '', 'COCINERA', 1, 1, 30, 8, 2335.71, 77.86, 2335.71, NULL, 0.00, 0.00, 45.00, 875.89, NULL, 0.00, 1, 155.71, NULL, 3, 467.14, 0.00, 0.00, NULL, 0.00, NULL, 0.00, 0.00, NULL, 0.00, NULL, 0.00, 0.00, 0.00, 0.00, 3834.45, 383.45, 65.57, 19.17, 19.17, 487.36, 23.36, 0, 0.00, 0, 0.00, 0, 0.00, 4, 38.93, NULL, NULL, NULL, NULL, 0, NULL, 549.65, 3284.80, 2.00, '10000024821501', 3.10, 'COCINA', 6, 2022);
INSERT INTO public.planilla VALUES (10, '', '7367441', 'OR', '2001-01-12', 21, '', 'ALVARADO', 'MAMANI', 'LUCIO CESAR', 'Bolivia', 'M', 0, 1, 0, 0, '2022-11-04', NULL, NULL, 2, 2, 48983718, 1, '', 'AYUDANTE - RECOLECCIÓN', 2, 1, 30, 8, 2250.00, 75.00, 2250.00, NULL, 0.00, 0.00, NULL, 0.00, 28, 840.00, 2, 300.00, NULL, 2, 300.00, NULL, NULL, NULL, 0.00, NULL, 0.00, NULL, NULL, 0.00, NULL, 0.00, NULL, NULL, 0.00, 3690.00, 369.00, 63.10, 18.45, 18.45, 469.00, NULL, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0.00, NULL, NULL, NULL, NULL, 0, NULL, 469.00, 3221.00, 2.10, '10000031432341', 3.00, 'NOCTURNO', 6, 2022);
INSERT INTO public.planilla VALUES (11, '', '7384453', 'OR', '2000-01-12', 21, '', 'ALVAREZ', 'CONDORI', 'JOEL', 'Bolivia', 'M', 0, 1, 0, 0, '2022-08-04', NULL, NULL, 2, 2, 48984619, 1, '', 'AYUDANTE - RECOLECCIÓN', 2, 1, 30, 8, 2250.00, 75.00, 2250.00, NULL, 0.00, 0.00, NULL, 0.00, 28, 840.00, 2, 300.00, NULL, 2, 300.00, NULL, NULL, NULL, 0.00, NULL, 0.00, NULL, NULL, 0.00, NULL, 0.00, 0.00, NULL, 0.00, 3690.00, 369.00, 63.10, 18.45, 18.45, 469.00, NULL, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0.00, NULL, NULL, NULL, NULL, 0, NULL, 469.00, 3221.00, 2.10, '10000044644850', 2.10, 'NOCTURNO', 6, 2022);
INSERT INTO public.planilla VALUES (12, '', '5061745', 'OR', '1978-03-03', 45, '', 'ARANCIBIA', 'FERNANDEZ', 'LUCI', 'Bolivia', 'F', 0, 1, 0, 0, '2023-07-04', NULL, NULL, 2, 2, 48983706, 1, '', 'OPERADOR DE LIMPIEZA', 2, 1, 30, 8, 2250.00, 75.00, 2250.00, NULL, 0.00, 0.00, NULL, 0.00, 29, 870.00, 2, 300.00, NULL, 3, 450.00, NULL, NULL, NULL, 0.00, NULL, 0.00, NULL, NULL, 0.00, NULL, 0.00, 0.00, NULL, 0.00, 3870.00, 387.00, 66.18, 19.35, 19.35, 491.88, NULL, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0.00, NULL, NULL, NULL, NULL, 0, NULL, 491.88, 3378.12, 3.10, '10000044650972', NULL, 'NOCTURNO', 6, 2022);
INSERT INTO public.planilla VALUES (13, '', '7261240', 'OR', '1988-08-06', 35, '', 'ARANCIBIA', 'NINAVIA', 'LUIS CARLOS', 'Bolivia', 'M', 0, 1, 0, 0, '2007-06-11', NULL, NULL, 2, 2, 34945970, 1, '', 'AYUDANTE - RECOLECCIÓN', 1, 1, 30, 8, 2250.00, 75.00, 2250.00, NULL, 5.00, 112.50, 0.00, 0.00, NULL, 0.00, NULL, 0.00, NULL, NULL, 0.00, 0.00, 0.00, NULL, 0.00, NULL, 0.00, 0.00, NULL, 0.00, NULL, 0.00, 0.00, 0.00, 0.00, 2362.50, 236.25, 40.40, 11.81, 11.81, 300.27, 22.50, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0.00, NULL, NULL, NULL, NULL, 0, NULL, 322.77, 2039.73, 2.00, '10000022491489', 2.10, 'RECOLECCION', 6, 2022);
INSERT INTO public.planilla VALUES (14, '', '4041700', 'OR', '1974-05-09', 49, '', 'ARIAS', 'CUTIÑA', 'MACEDONIA', 'Bolivia', 'F', 0, 1, 0, 0, '2006-11-02', NULL, NULL, 2, 2, 33106319, 1, '', 'OPERADOR DE LIMPIEZA', 1, 1, 30, 8, 2250.00, 75.00, 2250.00, NULL, 26.00, 585.00, NULL, 0.00, 29, 870.00, 2, 300.00, NULL, 3, 450.00, 0.00, 0.00, NULL, 0.00, NULL, 0.00, 0.00, NULL, 0.00, NULL, 0.00, 0.00, 0.00, 0.00, 4455.00, 445.50, 76.18, 22.28, 22.28, 566.24, 22.50, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0.00, NULL, NULL, NULL, NULL, 0, NULL, 588.74, 3866.26, 3.00, '10000022482389', 3.00, 'NOCTURNO', 6, 2022);
INSERT INTO public.planilla VALUES (15, '', '7416854', 'OR', '1995-05-05', 28, '', 'ARIAS', 'CUTIÑA', 'JHOSELYN', 'Bolivia', 'F', 0, 1, 0, 0, '2021-09-02', NULL, NULL, 2, 2, 48346457, 1, '', 'OPERADOR DE LIMPIEZA', 2, 1, 30, 8, 2250.00, 75.00, 2250.00, NULL, 0.00, 0.00, 24.00, 450.00, NULL, 0.00, 1, 150.00, NULL, 3, 450.00, 94.52, 189.04, NULL, 0.00, NULL, 0.00, 0.00, 94.52, 189.04, NULL, 0.00, 189.04, 94.52, 189.04, 3489.04, 348.90, 59.66, 17.45, 17.45, 443.46, NULL, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0.00, NULL, NULL, NULL, NULL, 0, NULL, 443.46, 3045.58, 3.10, '10000026536009', 4.00, 'BARRIDO BASE BOLIVAR', 6, 2022);
INSERT INTO public.planilla VALUES (16, '', '7363553-1E', 'OR', '1993-08-10', 28, '', 'ARUQUIPA', 'COPA', 'ANDRES MARCELO', 'Bolivia', 'M', 0, 1, 0, 0, '2021-11-05', NULL, NULL, 2, 1, 50336587, 1, '', 'GERENTE GENERAL', 1, 1, 30, 8, 10897.85, 363.26, 10897.85, NULL, 0.00, 0.00, NULL, 0.00, NULL, 0.00, NULL, 0.00, NULL, NULL, 0.00, 0.00, 0.00, NULL, 0.00, NULL, 0.00, 0.00, NULL, 0.00, NULL, 0.00, 0.00, 0.00, 0.00, 10897.85, 1089.79, 186.35, 54.49, 54.49, 1385.12, NULL, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0.00, NULL, NULL, NULL, NULL, 67, NULL, 1452.12, 9445.73, 1.00, '10000030912732', 1.00, 'ADMINISTRATIVO', 6, 2022);
INSERT INTO public.planilla VALUES (17, '', '7284663', 'OR', '1987-02-12', 35, '', 'BARRETA', 'VARGAS', 'NESTOR RONALD', 'Bolivia', 'M', 0, 1, 0, 0, '2008-12-06', NULL, NULL, 2, 2, 35343205, 1, '', 'AYUDANTE - RECOLECCIÓN', 1, 1, 30, 8, 2250.00, 75.00, 2250.00, NULL, 0.00, 0.00, 39.99, 749.81, 1, 30.00, 1, 150.00, NULL, 3, 450.00, 314.38, 628.76, NULL, 0.00, NULL, 0.00, 0.00, 314.38, 628.76, NULL, 0.00, 628.76, 314.38, 628.76, 4258.57, 425.86, 72.82, 21.29, 21.29, 541.26, 22.50, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, 563.76, 3694.81, 2.00, '10000022491801', 2.00, 'RECOLECCION', 6, 2022);
INSERT INTO public.planilla VALUES (18, '', '7331160', 'OR', '1994-04-03', 30, '', 'BELTRAN', 'MONTECINOS', 'RICHARD JILMAR', 'Bolivia', 'M', 0, 1, 0, 0, '2019-09-10', NULL, NULL, 2, 2, 7331160, 1, '', 'AYUDANTE - RECOLECCION', 2, 1, 30, 8, 2250.00, 75.00, 2250.00, NULL, 0.00, 0.00, 39.00, 731.25, 2, 60.00, 2, 300.00, NULL, 2, 300.00, 350.53, 701.06, NULL, 0.00, NULL, 0.00, 0.00, 350.53, 701.06, NULL, 0.00, 701.06, 350.53, 701.06, 4342.31, 434.23, 74.25, 21.71, 21.71, 551.90, NULL, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, 551.90, 3790.41, 2.10, '10000031915628', 2.00, 'RECOLECCION', 6, 2022);
INSERT INTO public.planilla VALUES (6, NULL, '3517494', 'OR', '1972-01-03', 50, 'DIURNO', 'ALARCON', 'QUISPE', 'JUAN PEDRO', 'Bolivia', 'M', 0, 1, 0, 0, '2016-10-01', NULL, NULL, 2, 1, 30149009, 1, NULL, 'CONDUCTOR I - RECOLECCIÓN', 1, 1, 30, 8, 2735.34, 91.18, 2735.34, NULL, 0.00, 0.00, 39.99, 911.55, NULL, 0.00, 1, 182.36, NULL, 2, 364.71, 366.33, 769.29, NULL, 0.00, NULL, 0.00, 0.00, NULL, 0.00, 366.33, 769.29, 1135623.00, 366.33, 769.29, 4963.25, 496.33, 84.87, 24.82, 24.82, 630.84, 27.35, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0.00, NULL, NULL, NULL, NULL, 0, NULL, 658.19, 4305.06, 2.00, '10000022491497', 2.00, 'RECOLECCION', 6, 2022);
INSERT INTO public.planilla VALUES (19, '', '2764927', 'OR', '1960-11-03', 62, '', 'BERDEJA', 'DAGA', 'JOSE CONSTANCIO', 'Bolivia', 'M', 0, 1, 0, 0, '2006-11-02', NULL, NULL, 2, 2, 30117987, 1, '', 'RESPONSABLE MANTENIMIENTO MECANICO', 1, 1, 30, 8, 5864.67, 195.49, 5864.67, NULL, 26.00, 585.00, NULL, 0.00, NULL, 0.00, NULL, 0.00, NULL, NULL, 0.00, 0.00, 0.00, NULL, 0.00, NULL, 0.00, 0.00, NULL, 0.00, NULL, 0.00, 0.00, 0.00, 0.00, 6449.67, 644.97, 110.29, 32.25, 32.25, 819.76, 58.65, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, 878.41, 5571.26, 2.00, '10000022480705', 2.00, 'SUPERVISORES', 6, 2022);
INSERT INTO public.planilla VALUES (20, '', '7276018', 'OR', '1961-07-04', 61, '', 'BERRIOS', 'LEDEZMA', 'MARIA ANTONIETA', 'Bolivia', 'F', 0, 1, 0, 0, '2014-06-02', NULL, NULL, 2, 2, 43661543, 1, '', 'OPERADOR DE LIMPIEZA', 1, 1, 29, 8, 2250.00, 75.00, 2175.00, NULL, 11.00, 247.50, 13.00, 243.75, NULL, 0.00, 2, 300.00, NULL, 2, 300.00, 0.00, 0.00, NULL, 0.00, NULL, 0.00, 0.00, NULL, 0.00, NULL, 0.00, 0.00, 0.00, 0.00, 3266.25, 326.63, 55.85, 16.33, 16.33, 415.14, 22.50, 0, 0.00, 1, 75.00, 0, 0.00, 0, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, 512.64, 2753.61, 3.00, '10000022491439', 3.00, 'BARRIDO BASE CENTRAL', 6, 2022);
INSERT INTO public.planilla VALUES (21, '', '3559498', 'OR', '1978-03-05', 44, '', 'BERRIOS', 'VILLCA', 'ELIZABETH', 'Bolivia', 'F', 0, 1, 0, 0, '2007-06-01', NULL, NULL, 2, 2, 34945799, 1, '', 'AYUDANTE - RECOLECCIÓN', 1, 1, 30, 8, 2250.00, 75.00, 2250.00, NULL, 18.00, 405.00, 25.00, 468.75, NULL, 0.00, 1, 150.00, NULL, 1, 150.00, 0.00, 0.00, NULL, 0.00, NULL, 0.00, 0.00, NULL, 0.00, NULL, 0.00, 0.00, 0.00, 0.00, 3423.75, 342.38, 58.55, 17.12, 17.12, 435.17, 22.50, 1, 37.50, 0, 0.00, 0, 0.00, 1, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, 495.17, 2928.58, 2.00, '10000022500917', 2.00, 'HOSPITALRIO', 6, 2022);
INSERT INTO public.planilla VALUES (22, '', '2752095', 'OR', '1958-01-05', 66, '', 'CACERES', 'GUTIERREZ', 'FRANCISCO', 'Bolivia', 'M', 0, 1, 0, 0, '2006-11-02', NULL, NULL, 2, 2, 27409521, 1, '', 'AYUDANTE - RECOLECCIÓN', 1, 1, 30, 8, 2250.00, 75.00, 2250.00, NULL, 42.00, 945.00, 39.99, 749.81, 2, 60.00, 1, 150.00, NULL, 3, 450.00, 357.60, 715.20, NULL, 0.00, NULL, 0.00, 0.00, 357.60, 715.20, NULL, 0.00, 715.20, 357.60, 715.20, 5320.01, 532.00, 0.00, 26.60, 26.60, 585.20, 22.50, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, 607.70, 4712.31, 2.00, '10000022500834', 2.00, 'RECOLECCION', 6, 2022);
INSERT INTO public.planilla VALUES (23, '', '4073261', 'OR', '1983-01-03', 39, 'DIURNO', 'CALIZAYA', 'CONDORI', 'JUAN CARLOS', 'Bolivia', 'M', 0, 1, 0, 0, '2016-01-01', NULL, NULL, 2, 2, 44664369, 1, '', 'CONDUCTOR', 1, 1, 30, 8, 2453.58, 81.79, 2453.58, NULL, 5.00, 112.50, 36.00, 736.07, 2, 65.43, 1, 163.57, NULL, 2, 327.14, 411.39, 863.92, NULL, 0.00, NULL, 0.00, 0.00, NULL, 0.00, 411.39, 863.92, NULL, 411.39, 863.92, 4722.21, 472.22, 80.75, 23.61, 23.61, 600.19, 24.54, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, 624.73, 4097.48, 2.00, '10000022466234', 2.00, 'RECOLECCION', 6, 2022);
INSERT INTO public.planilla VALUES (24, '', '7260520', 'OR', '1985-03-07', 37, '', 'CALLE', 'APAZA', 'ZAIDA ALICIA', 'Bolivia', 'F', 0, 1, 0, 0, '2008-02-03', NULL, NULL, 2, 2, 34724941, 1, '', 'AYUDANTE - RECOLECCIÓN', 1, 1, 30, 8, 2250.00, 75.00, 2250.00, NULL, 26.00, 585.00, NULL, 0.00, 16, 480.00, 2, 300.00, NULL, 1, 150.00, 0.00, 0.00, NULL, 0.00, NULL, 0.00, 0.00, NULL, 0.00, NULL, 0.00, 0.00, 0.00, 0.00, 3765.00, 376.50, 64.38, 18.83, 18.83, 478.54, 22.50, 0, 0.00, 0, 0.00, 0, 0.00, 3, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, 501.04, 3263.96, 2.00, '10000022491893', 3.00, 'NOCTURNO', 6, 2022);
INSERT INTO public.planilla VALUES (25, '', '7286201', 'OR', '1987-10-05', 36, '', 'CALLE', 'VILLCA', 'FRANZ MARCOS', 'Bolivia', 'M', 0, 1, 0, 0, '2011-02-07', NULL, NULL, 2, 2, 39484245, 1, '', 'AYUDANTE - RECOLECCIÓN', 1, 1, 30, 8, 2250.00, 75.00, 2250.00, NULL, 0.00, 0.00, 28.00, 525.00, 2, 60.00, 1, 150.00, NULL, 3, 450.00, 170.00, 340.00, NULL, 0.00, NULL, 0.00, 0.00, 170.00, 340.00, NULL, 0.00, 340.00, 170.00, 340.00, 3775.00, 377.50, 64.55, 18.88, 18.88, 479.81, 22.50, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, 502.31, 3272.69, 2.00, '10000022490506', 2.00, 'RECOLECCION', 6, 2022);
INSERT INTO public.planilla VALUES (26, '', '7352913', 'OR', '1992-08-03', 30, '', 'CALLE', 'QUISPE', 'WILFREDO', 'Bolivia', 'M', 0, 1, 0, 0, '2006-11-02', NULL, NULL, 2, 2, 43661610, 1, '', 'AYUDANTE DE RECOLECCIÓN', 2, 1, 26, 8, 2250.00, 75.00, 1950.00, NULL, 0.00, 0.00, 17.00, 318.75, NULL, 0.00, 1, 150.00, NULL, NULL, 0.00, 119.92, 239.84, NULL, 0.00, NULL, 0.00, NULL, 119.92, 239.84, NULL, 0.00, 239.84, 119.92, 239.84, 2658.59, 265.86, 45.46, 13.29, 13.29, 337.90, 22.50, 0, 0.00, 4, 300.00, 0, 0.00, 3, 0.00, 50, NULL, NULL, NULL, NULL, NULL, 710.40, 1948.19, 2.00, '10000022487248', 2.00, 'RECOLECCION', 6, 2022);
INSERT INTO public.planilla VALUES (1, NULL, '5517947', 'PT', '1977-03-05', 45, NULL, 'ACERO', 'ALVAREZ', 'EDGAR', 'Bolivia', 'M', 0, 1, 0, 0, '2021-06-03', NULL, NULL, 2, 2, 5517947, 1, NULL, 'OPERADOR DE LIMPIEZA', 2, 1, 30, 8, 2300.00, 75.00, 2250.00, NULL, 0.00, 0.00, 39.99, 749.81, NULL, 0.00, 2, 300.00, 150, 2, 300.00, 0.00, 0.00, NULL, 0.00, NULL, 0.00, 0.00, NULL, 0.00, NULL, 0.00, 0.00, 0.00, 0.00, 3749.81, 374.98, 64.12, 18.75, 18.75, 476.60, NULL, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0.00, NULL, NULL, NULL, NULL, 0, NULL, 476.60, 3273.21, 4.10, '10000032972974', 3.10, 'HUAJARA - RELLENO SANITARIO', 6, 2022);


--
-- TOC entry 2177 (class 0 OID 0)
-- Dependencies: 191
-- Name: planilla_id_planilla_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.planilla_id_planilla_seq', 1, false);


--
-- TOC entry 2160 (class 0 OID 75327039)
-- Dependencies: 186
-- Data for Name: rol; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.rol VALUES (1, 'Administrador');
INSERT INTO public.rol VALUES (2, 'Planillas');
INSERT INTO public.rol VALUES (3, 'Asistente');
INSERT INTO public.rol VALUES (4, 'Marcados');


--
-- TOC entry 2178 (class 0 OID 0)
-- Dependencies: 185
-- Name: rol_id_rol_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.rol_id_rol_seq', 4, true);


--
-- TOC entry 2162 (class 0 OID 75327048)
-- Dependencies: 188
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.usuario VALUES (1, 'admin', '9dd4e461268c8034f5c8564e155c67a6', 'administrador', true);


--
-- TOC entry 2179 (class 0 OID 0)
-- Dependencies: 187
-- Name: usuario_id_usuario_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.usuario_id_usuario_seq', 1, true);


--
-- TOC entry 2164 (class 0 OID 75327058)
-- Dependencies: 190
-- Data for Name: usuario_rol; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2180 (class 0 OID 0)
-- Dependencies: 189
-- Name: usuario_rol_id_usuario_rol_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.usuario_rol_id_usuario_rol_seq', 1, false);


--
-- TOC entry 2039 (class 2606 OID 75327093)
-- Name: planilla planilla_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.planilla
    ADD CONSTRAINT planilla_pk PRIMARY KEY (id_planilla);


--
-- TOC entry 2029 (class 2606 OID 75327063)
-- Name: rol rol_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.rol
    ADD CONSTRAINT rol_pk PRIMARY KEY (id_rol);


--
-- TOC entry 2031 (class 2606 OID 75327065)
-- Name: rol rol_un; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.rol
    ADD CONSTRAINT rol_un UNIQUE (rol);


--
-- TOC entry 2033 (class 2606 OID 75327067)
-- Name: usuario usuario_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_pk PRIMARY KEY (id_usuario);


--
-- TOC entry 2037 (class 2606 OID 75327075)
-- Name: usuario_rol usuario_rol_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario_rol
    ADD CONSTRAINT usuario_rol_pk PRIMARY KEY (id_usuario_rol);


--
-- TOC entry 2035 (class 2606 OID 75327069)
-- Name: usuario usuario_un; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_un UNIQUE (usuario);


--
-- TOC entry 2040 (class 2606 OID 75327076)
-- Name: usuario_rol usuario_rol_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario_rol
    ADD CONSTRAINT usuario_rol_fk FOREIGN KEY (id_rol) REFERENCES public.rol(id_rol);


--
-- TOC entry 2041 (class 2606 OID 75327081)
-- Name: usuario_rol usuario_rol_fk_1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario_rol
    ADD CONSTRAINT usuario_rol_fk_1 FOREIGN KEY (id_usuario) REFERENCES public.usuario(id_usuario);


-- Completed on 2022-08-02 09:20:41

--
-- PostgreSQL database dump complete
--

