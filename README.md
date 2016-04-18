# docker-lamp-wordpress


Current Environment:

Two volumes:
        1.for wordpress files
                
                volumes:
                    - ./wordpress:/var/www/html

        2.For mysql data

                 volumes:
                     - mysql-data:/var/lib/mysql


