# docker-lamp-wordpress


Current Environment:

Two volumes:
       
	 1.for wordpress files
                
                volumes:
                    - ./wordpress:/var/www/html

	2.For mysql data

                 volumes:
                     - mysql-data:/var/lib/mysql





Reusing the environment with your project:

Suppose your worpress files are in the folder wordpress1 and mysql data in mysql-data1.

Changes to be applied:

        1.copy docker-compose.yml to your project directory.
        2.copy docker folder containing wpdockefile to your directory.
        3.Edit the docker-compose.yml as follows

                1.change the volumes section for wordpress files

                        volumes:
                           - ./wordpress1:/var/www/html


		2.Change the named volume of mysql data (ie; mysql-data) as follows

			volumes:
			   - ./mysql-data1:/var/lib/mysql

		3.Delete/Comment the below volume section in docker-compose.yml file

			volumes:
			   mysql-data:
    			   driver: local

