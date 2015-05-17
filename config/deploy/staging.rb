role :app, %w{himen15@162.144.12.195:2222}
role :web, %w{himen15@162.144.12.195:2222}
role :db,  %w{himen15@162.144.12.195:2222}

set :ssh_options, {
  keys: %w(/Users/hejmaniok/.ssh/id_rsa),
  forward_agent: false,
  auth_methods: %w(publickey password)
}

set :tmp_dir, "/home1/himen15/tmp"