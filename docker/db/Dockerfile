FROM mysql:5.6.35

# Set supported env variables (part of base image documentation)
ENV MYSQL_RANDOM_ROOT_PASSWORD yes
ENV MYSQL_DATABASE app_db
ENV MYSQL_USER db_user
ENV MYSQL_PASSWORD secretPassword

# Add schema creation script
COPY ./create-schema.sql /docker-entrypoint-initdb.d/
