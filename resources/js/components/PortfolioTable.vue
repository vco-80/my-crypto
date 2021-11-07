<template>
    <v-card>
        <v-card-title>
            Portfolio
            <v-spacer></v-spacer>
            <!--v-text-field
                v-model="search"
                append-icon="mdi-magnify"
                label="Search"
                single-line
                hide-details
            ></v-text-field-->
        </v-card-title>
        <v-data-table
            no-results-text="Nichts gefunden"
            no-data-text="Noch keine Kryptos erfasst"
            :headers="headers"
            :items="data"
            :items-per-page="10"
            class="elevation-1"
        ></v-data-table>
    </v-card>
</template>

<script>
    import axios from 'axios';
    export default {
        name: 'PortfolioTable',
        data() {
            return {
                headers: [{
                    text: 'Crypto',
                    value: 'crypto_name'
                },{
                    text: 'Im Besitz',
                    value: 'amount'
                },{
                    text: 'Investiert',
                    value: 'total'
                }, {
                    text: 'Rendite'
                }],
                data: []
            };
        },
        methods: {
            getData: function() {
                axios.get('/api/portfolio')
                    .then(response => {
                        this.data = response.data;
                    })
                    .catch(error => {
                        console.log(error);
                    })
            }
        },
        mounted() {
            this.getData();
        }
    }
</script>
