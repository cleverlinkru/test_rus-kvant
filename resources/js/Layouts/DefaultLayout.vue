<template>
    <a-layout>
        <a-layout-content>
            <div class="content">
                <slot/>
            </div>
        </a-layout-content>
    </a-layout>
</template>

<style scoped>
.content {
    display: flex;
    justify-content: center;
    padding: 50px;
}
</style>
