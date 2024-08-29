const maxProfit = (prices) => {
    profitto=0 //prices[j]-prices[i] j>i
    for(let i=0; i<prices.length-1; i++){
      for(let j=i+1; j<prices.length; j++){
          if((prices[j]-prices[i])>profitto){
              profitto = prices[j]-prices[i]
          }
      }
      }
  return profitto
  };

  const maxProfitTwo = (prices) => {
    let buy = 0 
    let sell = 1
    let maxProfit = 0
    while (buy<prices.length){
        if(prices[buy]<prices[sell]){
            let profit = prices[sell] - prices[buy]
            if (profit > maxProfit) {
                maxProfit = profit
            }
        }
        else {buy = sell}
        sell++
    }
    return maxProfit
};