TYPE=VIEW
query=select `sakila`.`film`.`film_id` AS `FID`,`sakila`.`film`.`title` AS `title`,`sakila`.`film`.`description` AS `description`,`sakila`.`category`.`name` AS `category`,`sakila`.`film`.`rental_rate` AS `price`,`sakila`.`film`.`length` AS `length`,`sakila`.`film`.`rating` AS `rating`,group_concat(concat(concat(ucase(substr(`sakila`.`actor`.`first_name`,1,1)),lcase(substr(`sakila`.`actor`.`first_name`,2,length(`sakila`.`actor`.`first_name`))),_utf8\' \',concat(ucase(substr(`sakila`.`actor`.`last_name`,1,1)),lcase(substr(`sakila`.`actor`.`last_name`,2,length(`sakila`.`actor`.`last_name`)))))) separator \', \') AS `actors` from ((((`sakila`.`category` left join `sakila`.`film_category` on((`sakila`.`category`.`category_id` = `sakila`.`film_category`.`category_id`))) left join `sakila`.`film` on((`sakila`.`film_category`.`film_id` = `sakila`.`film`.`film_id`))) join `sakila`.`film_actor` on((`sakila`.`film`.`film_id` = `sakila`.`film_actor`.`film_id`))) join `sakila`.`actor` on((`sakila`.`film_actor`.`actor_id` = `sakila`.`actor`.`actor_id`))) group by `sakila`.`film`.`film_id`,`sakila`.`category`.`name`
md5=c8adf2f51ee1ba846a8b4e9deb9e969e
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-04-21 03:29:56
create-version=2
source=SELECT film.film_id AS FID, film.title AS title, film.description AS description, category.name AS category, film.rental_rate AS price,
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `sakila`.`film`.`film_id` AS `FID`,`sakila`.`film`.`title` AS `title`,`sakila`.`film`.`description` AS `description`,`sakila`.`category`.`name` AS `category`,`sakila`.`film`.`rental_rate` AS `price`,`sakila`.`film`.`length` AS `length`,`sakila`.`film`.`rating` AS `rating`,group_concat(concat(concat(ucase(substr(`sakila`.`actor`.`first_name`,1,1)),lcase(substr(`sakila`.`actor`.`first_name`,2,length(`sakila`.`actor`.`first_name`))),\' \',concat(ucase(substr(`sakila`.`actor`.`last_name`,1,1)),lcase(substr(`sakila`.`actor`.`last_name`,2,length(`sakila`.`actor`.`last_name`)))))) separator \', \') AS `actors` from ((((`sakila`.`category` left join `sakila`.`film_category` on((`sakila`.`category`.`category_id` = `sakila`.`film_category`.`category_id`))) left join `sakila`.`film` on((`sakila`.`film_category`.`film_id` = `sakila`.`film`.`film_id`))) join `sakila`.`film_actor` on((`sakila`.`film`.`film_id` = `sakila`.`film_actor`.`film_id`))) join `sakila`.`actor` on((`sakila`.`film_actor`.`actor_id` = `sakila`.`actor`.`actor_id`))) group by `sakila`.`film`.`film_id`,`sakila`.`category`.`name`
mariadb-version=100119