Instructions to setup Cloud system with GPU:

Step 1:
-Purchase CLoud instance with available GPU Hardware accelerator.
	-https://paperspace.zendesk.com/hc/en-us/articles/115000220394-Getting-Started-with-ML-in-a-Box-
	
Step 2:
-Install Tensorflow Libraries and GPU framework(CUDA) to cloud instance
	- https://paperspace.zendesk.com/hc/en-us/articles/235203648-Running-TensorFlow-TensorBoard-on-a-GPU-
	
Step 3: 
-Install Python 2.7 to CLoud instance
	- Note that paperspace has Python 2.7 pre-installed.
	-For other Cloud instances install via: https://www.python.org/downloads/
	
Step 3:
-Save "classify_image.py" script to working directory

Step 4:
-Set up apache webserver on Cloud instance
	-https://www.digitalocean.com/community/tutorials/how-to-install-the-apache-web-server-on-ubuntu-16-04
	
Step 5:
-Save script "upload_image.php" to the 'Document root' directory of apache webserver
	- Usually default directory is /var/www/html/
	
