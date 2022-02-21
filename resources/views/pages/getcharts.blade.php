<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Charts</title>
  </head>
  <body>
    <div id="app">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-12">
                    <h3>Статистика под дням</h3>
                    <line-chart 
                        :labels="getLabelsDays"
                        :dataset="getDatasetDays"
                    ></line-chart>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <h3>Статистика под месяцам</h3>
                    <line-chart 
                        :labels="getLabelsMonths"
                        :dataset="getDatasetMonths"
                    ></line-chart>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <h3>Повторные продажи по пользователям (Всего: <span v-text="Object.keys(getDatasetBuyUsers).length"></span> пользователей)</h3>
                    <p>У каждого пользователя его цветом выделены дни, когда услуга была активна.</p>
                    <div class="table-wrapper">
                        <table class="tbl">
                            <tr>
                                <td align="center">#</td>
                                <td v-for="(item, index) in dataDay" class="hDate">
                                    <span v-text="item.date"></span>
                                </td>
                            </tr>
                            <tr v-for="(user, userId) in getDatasetBuyUsers">
                                <td 
                                    v-text="'U' + userId"
                                    :style="{ backgroundColor: user.count > 2 ? 'rgb(231, 170, 53)' : '#fff'}"
                                ></td>
                                <td 
                                    v-for="(item, index) in dataDay"
                                    :style="{ backgroundColor: user.data[index] != undefined ? user.borderColor : '#fff'}"
                                ></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h3>Итоги по оплатам:</h3>
                    <ul>
                        <li v-for="data in this.dataMonth" v-html="data.date + ' - € <b>' + data.priceUser.toFixed(2) + '</b> ( ' + data.prevPercent.toFixed(2) + '% )'"></li>
                        <li v-html="'Всего: € <b>' + getPriceTotal + '</b>'"></li>
                        <li v-html="'Приблизительный доход: € <b>' + (getPriceTotal * 0.18).toFixed(2) + '</b> (Исходя из информации, что с 11 000 после затрат остается +- 2000. Это около 18%.)'"></li>
                        <li v-html="'Прогноз при условии ' + (upPercOfMonth * 100) + ' процентного линейного роста оборота. Сумма, €: <b>' + getFutureData.total + '</b>, Месяцев: <b>' + getFutureData.months + '</b>, Лет: <b>' + (getFutureData.months / 12).toFixed(2) + '</b>'"></li>
                        <li v-html="'Процент роста текущей суммы от итоговой: <b>' + ((getFutureData.total - getPriceTotal) / getPriceTotal * 100).toFixed(2) + '%</b>'"></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>

    <style>
        .table-wrapper
        {
            max-width: 100%;
            max-height: 800px;
            overflow: scroll;
            font-size: 11px;
        }
        .tbl .hDate span
        {
            white-space: nowrap;
            text-orientation: mixed;
            writing-mode: vertical-lr;
            height: 85px;
            display: block;
            text-align: center;
        }

        .tbl tr td
        {
            border: 1px solid #dfdfdf;
        }
    </style>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/vue-chartjs/dist/vue-chartjs.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <script>
        Vue.component('line-chart', {
            props: {
                labels: Array,
                dataset: Object,
            },
            extends: VueChartJs.Line,
            mounted () {
                this.renderChart({
                    labels: this.labels,
                    datasets: this.dataset
                    }, {responsive: true, maintainAspectRatio: false}
                )
            }
        });

        new Vue({
            el: '#app',
            data: {
                users: @json($users),
                transactions: @json($transactions),
                dataDay: {},
                dataMonth: {},
                dataBuyUsers: {},
                upPercOfMonth: 0.1
            },
            computed: {
                getFutureData: function(){
                    const myPerc = 0.03;
                    const upPercOfMonth = this.upPercOfMonth;
                    const cleanPricePer = 0.18;
                    const priceOfMonth = 1000;

                    let monthCount = 0;
                    let totalSumm = parseFloat(Object.values(this.dataMonth)[Object.values(this.dataMonth).length - 2].priceUser)

                    while(
                        (totalSumm * cleanPricePer * myPerc) <= priceOfMonth
                    )
                    {
                        totalSumm = totalSumm + (totalSumm * upPercOfMonth)
                        monthCount++;
                    }

                    return {
                        months: monthCount,
                        total: (totalSumm).toFixed(2)
                    }
                },
                getDatasetBuyUsers: function(){
                    return this.dataBuyUsers;
                },
                getPriceTotal: function(){
                    let total = 0;

                    for(let price of Object.values(this.dataMonth))
                    {
                        total += price.priceUser;
                    }

                    return total.toFixed(2);
                },
                getLabelsDays: function(){
                    return Object.values(this.dataDay).map(el => el.date);
                },
                getDatasetDays: function()
                {
                    let dataset = [];
                    dataset.push(
                        {
                            label: 'Регистраций, кол-во',
                            fill: false,
                            borderColor: '#00bbff',
                            tension: 0.1,
                            data: Object.values(this.dataDay).map(el => el.regUser)
                        },
                        {
                            label: 'Покупки, кол-во(включая повторные)',
                            fill: false,
                            borderColor: '#00ff6a',
                            tension: 0.1,
                            data: Object.values(this.dataDay).map(el => el.buyUser)
                        },
                        {
                            label: 'Повторные покупки, кол-во',
                            fill: false,
                            borderColor: '#ffb600',
                            tension: 0.1,
                            data: Object.values(this.dataDay).map(el => el.rebuyUser)
                        },
                        {
                            label: 'Сумма за день, €',
                            fill: false,
                            borderColor: '#bf00ff',
                            tension: 0.1,
                            data: Object.values(this.dataDay).map(el => el.priceUser)
                        }
                    );
                    return dataset;
                },
                getLabelsMonths: function(){
                    return Object.values(this.dataMonth).map(el => el.date);
                },
                getDatasetMonths: function()
                {
                    let dataset = [];
                    dataset.push(
                        {
                            label: 'Регистраций, кол-во',
                            fill: false,
                            borderColor: '#00bbff',
                            tension: 0.1,
                            data: Object.values(this.dataMonth).map(el => el.regUser)
                        },
                        {
                            label: 'Покупки, кол-во(включая повторные)',
                            fill: false,
                            borderColor: '#00ff6a',
                            tension: 0.1,
                            data: Object.values(this.dataMonth).map(el => el.buyUser)
                        },
                        {
                            label: 'Повторные покупки, кол-во',
                            fill: false,
                            borderColor: '#ffb600',
                            tension: 0.1,
                            data: Object.values(this.dataMonth).map(el => el.rebuyUser)
                        },
                        {
                            label: 'Сумма за месяц, €',
                            fill: false,
                            borderColor: '#bf00ff',
                            tension: 0.1,
                            data: Object.values(this.dataMonth).map(el => el.priceUser)
                        }
                    );
                    return dataset;
                }
            },
            methods:{
                getDatesArray: function(startDate, endDate) {
                    var dates = [],
                        currentDate = startDate,
                        addDays = function(days) {
                            var date = new Date(this.valueOf());
                            date.setDate(date.getDate() + days);
                            return date;
                        };
                    while (currentDate <= endDate) {
                        dates.push(currentDate);
                        currentDate = addDays.call(currentDate, 1);
                    }
                    return dates;
                }
            },
            created: function(){
                const startDate = new Date("12/27/2020");
                const endDate = new Date();

                let dates = this.getDatesArray(startDate, endDate);    
                                                                                                   
                dates.forEach(currentDate => {
                    
                    const day = ("0" + currentDate.getDate()).slice(-2);
                    const month = (currentDate.getMonth() + 1) > 9 ? currentDate.getMonth() + 1 : "0" + (currentDate.getMonth() + 1);
                    const year = currentDate.getFullYear();

                    if(this.dataDay[`${year}${month}${day}`] == undefined)
                        this.dataDay[`${year}${month}${day}`] = {
                            'date': `${day}.${month}.${year}`,
                            'regUser': 0,
                            'buyUser': 0,
                            'rebuyUser': 0,
                            'priceUser': 0,
                        };

                    if(this.dataMonth[`${year}${month}`] == undefined)
                        this.dataMonth[`${year}${month}`] = {
                            'date': `${month}.${year}`,
                            'regUser': 0,
                            'buyUser': 0,
                            'rebuyUser': 0,
                            'priceUser': 0,
                            'prevPercent': 0
                        };
                });
                
                for(let user of this.users)
                {
                    const elDate = new Date(Date.parse(user.created_at.split('T')[0]));

                    if(elDate < startDate)
                        continue;
                    
                    const day = ("0" + elDate.getDate()).slice(-2);
                    const month = (elDate.getMonth() + 1) > 9 ? elDate.getMonth() + 1 : "0" + (elDate.getMonth() + 1);
                    const year = elDate.getFullYear();

                    this.dataDay[`${year}${month}${day}`].regUser++;
                    this.dataMonth[`${year}${month}`].regUser++;
                }

                let rebuys = {};

                for(let transaction of this.transactions)
                {
                    const elDate = new Date(Date.parse(transaction.created_at.split('T')[0]));

                    if(elDate < startDate)
                        continue;
                    
                    const day = ("0" + elDate.getDate()).slice(-2);
                    const month = (elDate.getMonth() + 1) > 9 ? elDate.getMonth() + 1 : "0" + (elDate.getMonth() + 1);
                    const year = elDate.getFullYear();

                    this.dataDay[`${year}${month}${day}`].buyUser++;
                    this.dataMonth[`${year}${month}`].buyUser++;

                    this.dataDay[`${year}${month}${day}`].priceUser += transaction.price;
                    this.dataMonth[`${year}${month}`].priceUser += transaction.price;

                    if(rebuys[transaction.user_id] == undefined)
                        rebuys[transaction.user_id] = true;
                    else
                    {
                        this.dataDay[`${year}${month}${day}`].rebuyUser ++;
                        this.dataMonth[`${year}${month}`].rebuyUser ++;
                    }
                }

                let prevMonth = '';
                for(let index in this.dataMonth)
                {
                    let month = this.dataMonth[index];
                    let prevPercent = 0;

                    if(prevMonth == '')
                        prevMonth = index
                    else
                    {
                        prevPercent = (month.priceUser - this.dataMonth[prevMonth].priceUser) / month.priceUser * 100
                        prevMonth = index
                    }

                    this.dataMonth[index].prevPercent = prevPercent
                }

                const startForDate = new Date("12/27/2020");

                for(let userId in rebuys)
                {
                    let buyDays = {};
                    let countUserTransactions = 0;

                    for(let transaction of this.transactions)
                    {
                        if(userId != transaction.user_id)
                            continue;

                        const elDate = new Date(Date.parse(transaction.created_at.split('T')[0]));

                        if(elDate < startForDate)
                            continue;

                        const startDate = new Date(Date.parse(transaction.start.split('T')[0]));
                        const endDate = new Date(Date.parse(transaction.end.split('T')[0]));

                        let dates = this.getDatesArray(startDate, endDate);    
                                                                                                   
                        dates.forEach(function(date) {
                            
                            const dateDay = ("0" + date.getDate()).slice(-2);
                            const dateMonth = (date.getMonth() + 1) > 9 ? date.getMonth() + 1 : "0" + (date.getMonth() + 1);
                            const dateYear = date.getFullYear();

                            buyDays[`${dateYear}${dateMonth}${dateDay}`] = true;
                        });

                        countUserTransactions++;
                    }
                    
                    if(countUserTransactions > 1)
                    {
                        this.dataBuyUsers[userId] = {
                            label: 'U' + userId,
                            fill: false,
                            borderColor: '#' + Math.floor(Math.random()*16777215).toString(16),
                            data: buyDays,
                            count: countUserTransactions
                        };
                    }
                }
            },
            mounted: function(){
                // console.log(this.dataDay)
            }
        })
    </script>
  </body>
</html>