<?php
namespace pay;


abstract class Driver
{
	
	protected $merid;
	
	protected $appid;
	
	protected $key;
	
	
	/**
	 * 统一下单支付
	 * 
	 * @param float  $amount  支付金额
	 */
	abstract protected function pay($amount);
	
	
	/**
	 * 下单退款
	 * 
	 * @param float   $amount   [退款金额]
     * @param string  $trade_no [第三方单号]
	 */
	abstract protected function refund($amount, $trade_no);
	
	
	/**
	 * 单笔转账
	 * 
	 * @param  float  $amount 	     [转账金额] 
	 * @param  string $payee_account [转入账户]
	 * @param  string $payee_type    [账户类型]
	 * @param  string $out_biz_no    [平台流水号]
	 */
	abstract protected function transfer($amount, $payee_account, $payee_type, $out_biz_no);
	
}