CREATE TABLE salary(
    id TEXT PRIMARY KEY UNIQUE NOT NULL,
    email TEXT,
    empresa TEXT,
    cargo TEXT,
    obs TEXT,
    salario NUMERIC(10,2)
);