<template>
    <v-container>
        <portfolio-table></portfolio-table>
        <v-container>
            <v-row justify="end">
                <v-btn color="primary" class="mt-5" @click.stop="showCreateModifyDialog=true">
                    <v-icon left>
                      mdi-plus
                    </v-icon>
                    Hinzufügen
                </v-btn>
            </v-row>
        </v-container>
        <CreateModifyDialog v-model="showCreateModifyDialog"></CreateModifyDialog>
    </v-container>
</template>

<script>
    import PortfolioTable from '../components/PortfolioTable'
    import CreateModifyDialog from '../components/CreateModifyDialog'

    export default {
        name: 'Home',
        data () {
            return {
                showCreateModifyDialog: false
            }
        },
        components: {
            PortfolioTable,
            CreateModifyDialog
        }
    };
</script>

