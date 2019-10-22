# Converted with pg2mysql-1.9
# Converted on Sun, 13 Oct 2019 23:04:50 -0400
# Lightbox Technologies Inc. http://www.lightbox.ca

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone="+00:00";

CREATE TABLE public.brand (
    brand_name text NOT NULL,
    brand_description text NOT NULL,
    brand_image text NOT NULL,
    brand_type text NOT NULL,
    brand_price numeric(6,2),
    brand_category text,
    brand_id int(11)
) TYPE=MyISAM;

CREATE TABLE public.category (
    cat_id int(11) NOT NULL,
    cat_name text NOT NULL,
    cat_description text NOT NULL,
    cat_image text NOT NULL
) TYPE=MyISAM;

CREATE TABLE public.customer (
    cust_id int(11) NOT NULL,
    cust_name text NOT NULL,
    cust_email text NOT NULL,
    cust_password text NOT NULL,
    cust_address text NOT NULL,
    cust_contact text NOT NULL
) TYPE=MyISAM;

CREATE TABLE public.orders (
    ord_id int(11) NOT NULL,
    ord_cust_id int(11) NOT NULL,
    ord_date text NOT NULL,
    ord_status text NOT NULL,
    payment_method text
) TYPE=MyISAM;

CREATE TABLE public.purchases (
    purchase_id int(11) NOT NULL,
    total_price int(11) NOT NULL,
    product_list text[] NOT NULL,
    purchase_date date NOT NULL,
    cust_id int(11) NOT NULL,
    ordering_address text NOT NULL,
    recipient_address text,
    payment_method text
) TYPE=MyISAM;

CREATE TABLE public.sales (
    sale_id int(11) NOT NULL,
    sale_ord_id int(11),
    sale_mod_payment text
) TYPE=MyISAM;

CREATE TABLE public.vendor (
    vendor_id int(11) NOT NULL,
    vendor_name text NOT NULL,
    vendor_company text NOT NULL,
    vendor_company_address text NOT NULL,
    vendor_email text NOT NULL,
    vendor_contact text NOT NULL,
    vendor_address text NOT NULL
) TYPE=MyISAM;

ALTER TABLE public.category
    ADD CONSTRAINT category_primary_key PRIMARY KEY (cat_id);
ALTER TABLE public.customer
    ADD CONSTRAINT customer_primary_key PRIMARY KEY (cust_id);
ALTER TABLE public.orders
    ADD CONSTRAINT order_primary_key PRIMARY KEY (ord_id);
ALTER TABLE public.purchases
    ADD CONSTRAINT purchases_pkey PRIMARY KEY (purchase_id);
ALTER TABLE public.sales
    ADD CONSTRAINT slaes_primary_key PRIMARY KEY (sale_id);
ALTER TABLE public.vendor
    ADD CONSTRAINT vendor_primary_key PRIMARY KEY (vendor_id);
