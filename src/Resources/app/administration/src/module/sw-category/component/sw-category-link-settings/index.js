import template from './sw-category-link-settings.html.twig';

const { Component } = Shopware;

Component.override('sw-category-link-settings', {
    template,

    watch: {
        category: function (val) {
            this.initCustomFields();
        },
    },

    created() {
        this.initCustomFields();
    },

    methods: {
        initCustomFields() {
            if (this.category.customFields === null || this.category.customFields === undefined) {
                this.$set(this.category, 'customFields', {});
            }
        },

        categoryLabel(item) {
            return item.breadcrumb.join(' > ');
        }
    }
});
