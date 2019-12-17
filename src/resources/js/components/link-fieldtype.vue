<template>
    <div class="input-group">
        <div class="input-group-prepend flex items-center text-grey-50">
            https://
        </div>
        <input class="input-text" type="text" :value="value" @keyup="removeHttps" @input="update($event.target.value)" />
        <a :href="'https://' + value" target="_blank" class="input-group-append flex items-center hover:bg-grey-40 hover:text-grey-70">
            Test me!
        </a>
    </div>
</template>

<script>
export default {
    mixins: [Fieldtype],

    methods: {
        removeHttps() {
            this.update(
                this.value.replace(/^(http|https):\/\//gi, '')
            );
        }
    }
};
</script>