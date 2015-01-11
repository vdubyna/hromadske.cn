# -*- mode: ruby -*-
# vi: set ft=ruby :

require 'yaml'

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

dir = File.dirname(File.expand_path(__FILE__))
configValues = YAML.load_file("#{dir}/vagrant/config.yaml")
data = configValues['vm']

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.ssh.private_key_path = "~/.ssh/id_rsa"

  config.vm.hostname = "prog.cn.ua"
  config.vm.box = "prog.cn.ua"

  config.vm.provider :digital_ocean do |provider, override|
    provider.token = "#{data['provider']['digitalocean']['token']}"
    provider.image = "centos-7-0-x64"
    provider.region = "ams3"
    provider.size = '512mb'
  end

  config.vm.provision "shell", path: "./vendor/vdubyna/vagrant-shell-provision/tasks/centos/7.x/utils.sh"
  config.vm.provision "shell", path: "./vendor/vdubyna/vagrant-shell-provision/tasks/centos/7.x/mysql.sh"
  config.vm.provision "shell", path: "./vendor/vdubyna/vagrant-shell-provision/tasks/centos/7.x/php54.sh"
  config.vm.provision "shell", path: "./vendor/vdubyna/vagrant-shell-provision/tasks/centos/7.x/apache.sh"
  config.vm.provision "shell", path: "./vendor/vdubyna/vagrant-shell-provision/tasks/centos/7.x/php54/composer.sh"
  config.vm.provision "shell", path: "./vendor/vdubyna/vagrant-shell-provision/tasks/centos/7.x/php54/xdebug.sh"
  config.vm.provision "shell", path: "./vendor/vdubyna/vagrant-shell-provision/tasks/centos/7.x/php54/timezone.sh", args: "Europe/Kiev"
  config.vm.provision "shell", path: "./vagrant/tasks/prog.cn.ua.sh"
end