<template>
    <div>
        <li class="list-group-item mb-2" :class="className">
            <slot></slot>
            <small>{{ time }}</small></li>
        <small class="badge float-right" :class="badgeClass">{{ user }}</small>
    </div>
</template>

<script>
    export default {
        props: [
            'color',
            'user',
            'time'
        ],
        computed: {
            className() {
                return 'list-group-item-' + this.color;
            },
            badgeClass() {
                return 'badge-' + this.color;
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
