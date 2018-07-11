CREATE TABLE tariff
(
    tariff_id NUMBER,
    name VARCHAR2(50),
    granted_voice NUMBER,
    granted_sms NUMBER,
    granted_data NUMBER,
    CONSTRAINT tariff_pk PRIMARY KEY (tariff_id)
);
/

CREATE TABLE subscriber
(
    subscriber_id NUMBER,
    msisdn VARCHAR(10) NOT NULL UNIQUE,
    password VARCHAR(64) NOT NULL,
    first_name VARCHAR(60) NOT NULL,
    last_name VARCHAR(60) NOT NULL,
    tariff_id NUMBER,
    CONSTRAINT subscriber_pk PRIMARY KEY (subscriber_id),
    CONSTRAINT tariff_sub_tariffid_fk FOREIGN KEY (tariff_id)
    REFERENCES tariff(tariff_id)
);
/
-- GENERATED BY DEFAULT ON NULL AS IDENTITY

CREATE TABLE invoice
(   
    subscriber_id NUMBER,
    invoice_id NUMBER,
    invoice_date DATE,
    due_date DATE,
    total_amount NUMBER,
    open_amount NUMBER,
    CONSTRAINT invoice_pk PRIMARY KEY (invoice_id),
    CONSTRAINT sub_invoice_subid_fk FOREIGN KEY (subscriber_id)
    REFERENCES subscriber(subscriber_id)
);
/

CREATE TABLE usage
(
    subscriber_id NUMBER,
    usage_type VARCHAR2(15),
    used_amount NUMBER,
    start_date DATE,
    usage_id NUMBER,
    CONSTRAINT usage_pk PRIMARY KEY (usage_id),
    CONSTRAINT sub_usage_subid_fk FOREIGN KEY (subscriber_id)
    REFERENCES subscriber(subscriber_id)
);
/

DROP TABLE invoice;
DROP TABLE subscriber;
DROP TABLE tariff;
DROP TABLE usage;

/

