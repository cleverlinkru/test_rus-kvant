<script setup>
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import {useForm} from "@inertiajs/vue3";

const form = useForm({
    name: '',
    phone: '',
    message: '',
});

const onFinish = () => {
    form.post(route('message.store'), {
        onSuccess: () => {
            form.reset();
        },
    });
}
</script>

<template>
    <DefaultLayout>
        <a-form
            :model="form"
            :label-col="{ span: 24 }"
            :wrapper-col="{ span: 24 }"
            @finish="onFinish"
        >
            <a-form-item label="Name">
                <a-input v-model:value="form.name" placeholder="Name"/>
                <div class="error" v-if="form.errors.name">{{form.errors.name}}</div>
            </a-form-item>
            <a-form-item label="Phone">
                <a-input v-model:value="form.phone" placeholder="Phone"/>
                <div class="error" v-if="form.errors.phone">{{form.errors.phone}}</div>
            </a-form-item>
            <a-form-item label="Message">
                <a-textarea v-model:value="form.message" placeholder="Message" :rows="4"/>
                <div class="error" v-if="form.errors.message">{{form.errors.message}}</div>
            </a-form-item>
            <a-form-item>
                <a-button type="primary" html-type="submit">Send</a-button>
                <div class="success" v-if="$page.props.res">Message sended</div>
            </a-form-item>
        </a-form>
    </DefaultLayout>
</template>

<style scoped>
.success {
    color: #090;
}

.error {
    color: #f00;
}
</style>
