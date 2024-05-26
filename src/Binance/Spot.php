<?php

namespace Binance;

use Binance\APIClient;

class Spot extends APIClient
{
    const LIMIT_ORDER = 'LIMIT';
    const MARKET_ORDER = 'MARKET';
    const STOP_LOSS_LIMIT_ORDER = 'STOP_LOSS_LIMIT';
    const TAKE_PROFIT_LIMIT_ORDER = 'TAKE_PROFIT_LIMIT';
    const LIMIT_MAKER = 'LIMIT_MAKER';

    use Spot\BLVT;
    use Spot\BSwap;
    use Spot\C2C;
    use Spot\Convert;
    use Spot\CryptoLoans;
    use Spot\Fiat;
    use Spot\GiftCard;
    use Spot\IsolatedMarginStream;
    use Spot\Margin;
    use Spot\MarginStream;
    use Spot\Market;
    use Spot\Mining;
    use Spot\NFT;
    use Spot\Pay;
    use Spot\PortfolioMargin;
    use Spot\Rebate;
    use Spot\Savings;
    use Spot\Staking;
    use Spot\Stream;
    use Spot\SubAccount;
    use Spot\Trade;
    use Spot\Wallet;

    public function __construct(array $args = [])
    {
        $args['baseURL'] = $args['baseURL'] ?? 'https://api.binance.com';
        parent::__construct($args);
    }
}
