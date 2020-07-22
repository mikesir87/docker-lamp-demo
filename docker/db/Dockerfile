FROM mysql:5.6.35

# Set supported env variables (part of base image documentation)
ENV MYSQL_RANDOM_ROOT_PASSWORD yes

# Add schema creation script
COPY ./create-schema.sql /docker-entrypoint-initdb.d/
