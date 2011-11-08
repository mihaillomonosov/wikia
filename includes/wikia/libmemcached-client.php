<?php

class MWLibMemcached {
	
	const SERIALIZED = 1;
	const COMPRESSED = 2;
	const COMPRESSION_SAVINGS = 0.20;
	
	
	/**
	 * Command statistics
	 *
	 * @var     array
	 * @access  public
	 */
	var $stats;
	
	protected $servers;
	protected $debug;
	protected $persistent;
	
	protected $compression = true;
	protected $binary = true;
	
	/**
	 * Memcache initializer
	 *
	 * @param   array    $args    Associative array of settings
	 *
	 * @return  mixed
	 */
	public function __construct( $args ) {
		global $wgMemCachedTimeout;
		$this->timeout = intval( $wgMemCachedTimeout / 1000 );
		$this->stats = array();
		$this->debug = @$args['debug'];
		$this->persistent = $args['persistant'];
		$this->set_servers( @$args['servers'] ); 
		return;
		// stub
		$this->set_servers( @$args['servers'] );
		$this->_debug = @$args['debug'];
		$this->stats = array();
		$this->_compress_threshold = @$args['compress_threshold'];
		$this->_persistant = array_key_exists( 'persistant', $args ) ? ( @$args['persistant'] ) : false;
		$this->_compress_enable = true;
		$this->_have_zlib = function_exists( 'gzcompress' );
	
		$this->_cache_sock = array();
		$this->_host_dead = array();
		$this->_dupe_cache = array();
	
		$this->_timeout_seconds = 0;
		$this->_timeout_microseconds = $wgMemCachedTimeout;
	
		$this->_connect_timeout = 0.01;
		$this->_connect_attempts = 2;
	}
	
	/**
	 * Adds a key/value to the memcache server if one isn't already set with
	 * that key
	 *
	 * @param   string  $key     Key to set with data
	 * @param   mixed   $val     Value to store
	 * @param   integer $exp     (optional) Time to expire data at
	 *
	 * @return  boolean
	 */
	public function add( $key, $val, $exp = 0 ) {
		@$this->stats['add']++;
		return $this->getMemcachedObject()->add($key,$val,$exp);
	}
	
	/**
	 * Decriment a value stored on the memcache server
	 *
	 * @param   string   $key     Key to decriment
	 * @param   integer  $amt     (optional) Amount to decriment
	 *
	 * @return  mixed    FALSE on failure, value on success
	 */
	public function decr( $key, $amt = 1 ) {
		@$this->stats['decr']++;
		return $this->getMemcachedObject()->decrement($key,$amt);
	}
	
	/**
	 * Deletes a key from the server, optionally after $time
	 *
	 * @param   string   $key     Key to delete
	 * @param   integer  $time    (optional) How long to wait before deleting
	 *
	 * @return  boolean  TRUE on success, FALSE on failure
	 */
	public function delete( $key, $time = 0 ) {
		@$this->stats['delete']++;
		return $this->getMemcachedObject()->delete($key,$time);
	}
	
	/**
	 * Disconnects all connected sockets
	 */
	public function disconnect_all() {
		throw new Exception("Not implemented");
	}
	
	/**
	 * Enable / Disable compression
	 *
	 * @param   boolean  $enable  TRUE to enable, FALSE to disable
	 */
	public function enable_compress( $enable ) {
		throw new Exception("Not implemented");
	}
	
	/**
	 * Forget about all of the dead hosts
	 */
	public function forget_dead_hosts() {
		throw new Exception("Not implemented");
	}
	
	/**
	 * Retrieves the value associated with the key from the memcache server
	 *
	 * @param  string   $key     Key to retrieve
	 *
	 * @return  mixed
	 */
	public function get( $key ) {
		@$this->stats['get']++;
		return $this->getMemcachedObject()->get($key);
	}
	
	/**
	 * Get multiple keys from the server(s)
	 *
	 * @param   array    $keys    Keys to retrieve
	 *
	 * @return  array
	 */
	public function get_multi( $keys ) {
		@$this->stats['get_multi']++;
		return $this->getMemcachedObject()->getMulti($keys);
	}
	
	/**
	 * Increments $key (optionally) by $amt
	 *
	 * @param   string   $key     Key to increment
	 * @param   integer  $amt     (optional) amount to increment
	 *
	 * @return  integer  New key value?
	 */
	public function incr( $key, $amt = 1 ) {
		@$this->stats['incr']++;
		return $this->getMemcachedObject()->increment($key,$amt);
	}
	
	/**
	 * Overwrites an existing value for key; only works if key is already set
	 *
	 * @param   string   $key     Key to set value as
	 * @param   mixed    $value   Value to store
	 * @param   integer  $exp     (optional) Experiation time
	 *
	 * @return  boolean
	 */
	public function replace( $key, $value, $exp = 0 ) {
		@$this->stats['replace']++;
		return $this->getMemcachedObject()->replace($key,$value,$exp);
	}
	
	/**
	 * Passes through $cmd to the memcache server connected by $sock; returns
	 * output as an array (null array if no output)
	 *
	 * NOTE: due to a possible bug in how PHP reads while using fgets(), each
	 *       line may not be terminated by a \r\n.  More specifically, my testing
	 *       has shown that, on FreeBSD at least, each line is terminated only
	 *       with a \n.  This is with the PHP flag auto_detect_line_endings set
	 *       to falase (the default).
	 *
	 * @param   resource $sock    Socket to send command on
	 * @param   string   $cmd     Command to run
	 *
	 * @return  array    Output array
	 * @access  public
	 */
	function run_command( $sock, $cmd ) {
		throw new Exception("Not implemented");
	}
	
	/**
	 * Unconditionally sets a key to a given value in the memcache.  Returns true
	 * if set successfully.
	 *
	 * @param   string   $key     Key to set value as
	 * @param   mixed    $value   Value to set
	 * @param   integer  $exp     (optional) Experiation time
	 *
	 * @return  boolean  TRUE on success
	 */
	public function set( $key, $value, $exp = 0 ) {
		@$this->stats['set']++;
		return $this->getMemcachedObject()->set($key,$value,$exp);
	}
	
	/**
	 * Sets the compression threshold
	 *
	 * @param   integer  $thresh  Threshold to compress if larger than
	 */
	public function set_compress_threshold( $thresh ) {
		throw new Exception("Not implemented");
	}
	
	/**
	 * Sets the debug flag
	 *
	 * @param   boolean  $dbg     TRUE for debugging, FALSE otherwise
	 *
	 * @see     MWMemcached::__construct
	 */
	public function set_debug( $dbg ) {
		$this->debug = $dbg;
	}
	
	/**
	 * Sets the server list to distribute key gets and puts between
	 *
	 * @param   array    $list    Array of servers to connect to
	 *
	 * @see     MWMemcached::__construct()
	 */
	public function set_servers( $list ) {
		$servers = array();
		if (is_array($list)) {
			foreach ($list as $srv) {
				list( $host, $port ) = explode(':',$srv);
				$servers[] = array( $host, $port, 1 );
			}
		}
		if ($servers !== $this->servers) {
			$this->servers = $servers;
			$this->freeMemcachedObject();
		}
	}
	
	/**
	 * Sets the timeout for new connections
	 *
	 * @param   integer  $seconds Number of seconds
	 * @param   integer  $microseconds  Number of microseconds
	 */
	public function set_timeout( $seconds, $microseconds ) {
		throw new Exception("Not implemented");
	}
	
	
	// NON-PUBLIC PART
	
	protected $memcached;
	
	protected function getPersistentId() {
		return md5(serialize($this->servers));
	}
	
	protected function getMemcachedObject() {
		if (!$this->memcached) {
			// create the Memcached object
			if ($this->persistent) {
				$memcached = new Memcached($this->getPersistentId());
			} else {
				$memcached = new Memcached();
			}
			
			// set options as desired
			$memcached->setOption(Memcached::OPT_LIBKETAMA_COMPATIBLE,true);
			// the line above sets the next 2 options automatically
			//$memcached->setOption(Memcached::OPT_HASH,Memcached::HASH_MD5);
			//$memcached->setOption(Memcached::OPT_DISTRIBUTION,Memcached::DISTRIBUTION_CONSISTENT);
			$memcached->setOption(Memcached::OPT_COMPRESSION,$this->compression);
			$memcached->setOption(Memcached::OPT_BINARY_PROTOCOL,$this->binary);
			$memcached->setOption(Memcached::OPT_CONNECT_TIMEOUT,10);
			$memcached->setOption(Memcached::OPT_SERVER_FAILURE_LIMIT,2);
			$memcached->setOption(Memcached::OPT_SEND_TIMEOUT,$this->timeout);
			$memcached->setOption(Memcached::OPT_RECV_TIMEOUT,$this->timeout);
			$memcached->setOption(Memcached::OPT_POLL_TIMEOUT,$this->timeout);
// 			$memcached->setOption();
				
			// allow settings override in configuration (eg. enable igbinary serializer)
			global $wgLibMemCachedOptions;
			if (is_array($wgLibMemCachedOptions)) {
				foreach ($wgLibMemCachedOptions as $key => $val) {
					$memcached->setOption($key,$val);
				}
			}
			
			// add servers if required
			if (!count($memcached->getServerList())) {
				$memcached->addServers($this->servers);
			}
			$this->memcached = $memcached;
		}
		return $this->memcached;
	}
	
	protected function freeMemcachedObject() {
		$this->memcached = null;
	}
	
}

