<template>
    <div>
        <div class="form-group section-fieldtype w-full" :class="{'active': showFields}" v-if="config.show_header">
            <div class="flex grp-justify-between grp-items-center">
                <div class="field-inner">
                    <label class="publish-field-label">
                        <span v-text="config.display" v-tooltip="{content: config.handle, delay: 300, autoHide: false}"></span>
                    </label>
                    <div class="help-block -mt-2" v-if="config.instructions" v-html="$options.filters.markdown(config.instructions)"></div>
                </div>
                <div class="toggle-fieldtype-wrapper grp-mt-2" v-if="config.show_toggle">
                    <toggle-input v-model="toggle"></toggle-input>
                </div>
            </div>
        </div>
        <div class="publish-fields w-full" v-show="showFields"></div>
    </div>
</template>

<script>
export default {

    mixins: [Fieldtype],

    data() {
        return {
            toggle: false,
        }
    },

    watch: {
        toggle() {
            if (this.config.save_toggle_state) {
                this.update(this.toggle)
            }
        }
    },

    computed: {
        showFields(){
            return ! this.config.toggle_controls_visibility || (this.config.toggle_controls_visibility && this.toggle);
        }
    },

    mounted() {
        if (this.config.save_toggle_state) {
            this.toggle = this.value
        }

        /** Find all next siblings that are fields, but stop if you encounter an other group */
        let element = this.$el.closest('.publish-field')
        let nextSiblings = [];

        while (element.nextElementSibling) {
            if (element.nextElementSibling.classList.contains('inline_group-fieldtype')) {
                break
            }

            nextSiblings.push(element.nextElementSibling);
            element = element.nextElementSibling;
        }

        /** Append the sibling fields to the correct group content container */
        this.$nextTick(() => {
            nextSiblings.forEach((nextSibling) => {
                this.$el.querySelector('.publish-fields').appendChild(nextSibling)
            })
        })
    },

}
</script>