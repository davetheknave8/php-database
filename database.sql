CREATE TABLE "person"(
	id SERIAL PRIMARY KEY,
	"name" VARCHAR(100),
	"age" INT
	);
	
INSERT INTO person("name", age)
	VALUES('david', 24), ('adam', 789), ('jake', 657), ('kyle', 1249);