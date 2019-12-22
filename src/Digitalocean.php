<?php
    namespace NickNickIO\Digitalocean;

    use NickNickIO\Digitalocean\Requests\{
        AccountRequest,
        ActionRequest,
        CertificateRequest,
        DatabaseRequest,
        DomainRecordRequest,
        DomainRequest,
        DropletRequest,
        FirewallRequest,
        FloatingIPRequest,
        ImageRequest,
        LoadBalancerRequest,
        ProjectRequest,
        ProjectResourceRequest,
        RegionRequest,
        SizeRequest,
        SnapshotRequest,
        SshKeyRequest,
        VolumeRequest
    };

    class Digitalocean
    {

        /**
         * @var Connection
         */
        private $connection;

        /**
         * @var ImageRequest
         */
        public $image;

        /**
         * @var AccountRequest
         */
        public $account;

        /**
         * @var DropletRequest
         */
        public $droplet;

        /**
         * @var ActionRequest
         */
        public $action;

        /**
         * @var VolumeRequest
         */
        public $volume;

        /**
         * @var CertificateRequest
         */
        public $certificate;

        /**
         * @var FloatingIPRequest
         */
        public $floating_ip;

        /**
         * @var DatabaseRequest
         */
        public $database;

        /**
         * @var DomainRequest
         */
        public $domain;

        /**
         * @var DomainRecordRequest
         */
        public $domain_record;

        /**
         * @var FirewallRequest
         */
        public $firewall;

        /**
         * @var LoadBalancerRequest
         */
        public $load_balancers;

        /**
         * @var ProjectRequest
         */
        public $project;

        /**
         * @var ProjectResourceRequest
         */
        public $project_resource;

        /**
         * @var SizeRequest
         */
        public $size;

        /**
         * @var RegionRequest
         */
        public $region;

        /**
         * @var SnapshotRequest
         */
        public $snapshot;

        /**
         * @var SshKeyRequest
         */
        public $ssh_key;

        /**
         * Digitalocean constructor.
         * @param string $key
         */
        public function __construct($key)
        {
            $this->connection = new Connection($key);

            $this->size = new SizeRequest($this->connection);
            $this->image = new ImageRequest($this->connection);
            $this->action = new ActionRequest($this->connection);
            $this->volume = new VolumeRequest($this->connection);
            $this->domain = new DomainRequest($this->connection);
            $this->region = new RegionRequest($this->connection);
            $this->ssh_key = new SshKeyRequest($this->connection);
            $this->project = new ProjectRequest($this->connection);
            $this->account = new AccountRequest($this->connection);
            $this->droplet = new DropletRequest($this->connection);
            $this->snapshot = new SnapshotRequest($this->connection);
            $this->firewall = new FirewallRequest($this->connection);
            $this->database = new DatabaseRequest($this->connection);
            $this->floating_ip = new FloatingIPRequest($this->connection);
            $this->certificate = new CertificateRequest($this->connection);
            $this->domain_record = new DomainRecordRequest($this->connection);
            $this->load_balancers = new LoadBalancerRequest($this->connection);
            $this->project_resource = new ProjectResourceRequest($this->connection);
        }

    }