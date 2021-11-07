<template>
    <v-dialog v-model="show" max-width="500px">
        <v-card>
            <v-card-title>
                <span class="text-h5">Hinzufügen</span>
                <v-spacer></v-spacer>
                <v-btn
                    icon
                    @click.stop="show=false"
                >
                    <v-icon>mdi-close</v-icon>
                </v-btn>
            </v-card-title>
            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="secondary" @click.stop="show=false">Abbrechen</v-btn>
                <v-btn color="primary">Speichern</v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>
</template>

<script>
export default {
    props: {
        value: Boolean
    },
    computed: {
        show: {
            get () {
                return this.value
            },
            set (value) {
                this.$emit('input', value)
            }
        }
    }
}
</script>
