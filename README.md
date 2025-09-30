# presta-helloworld

Simple prestashop module with some Proofs of Concepts for learning


## Test environment installation


```bash

## Live development of a module set up
# This way you can alter the repo , and will be live tested on your prestashop instance (just for test)
module_path="/home/fakuve/myrepos/rafmartom/presta-helloworld/helloworld"
module_name=$(basename "${module_path}")

# Make sure Apache can read it
chgrp -R www-data "${module_path}"
chmod -R 2750 "${module_path}"

# Create the target dir for the bind mount
sudo mkdir -p /var/www/html/modules/"${module_name}"

# Mount bind for this session
sudo mount --bind "${module_path}" /var/www/html/modules/"${module_name}"

# Make it permanent across reboots (append to /etc/fstab safely)
echo "${module_path} /var/www/html/modules/${module_name} none bind 0 0" | sudo tee -a /etc/fstab
```
