// This file is auto-generated, don't edit it. Thanks.
/**
 * This is a console module
 */
package client

import (
	"fmt"
	"os"

	"github.com/alibabacloud-go/tea/tea"
)

/**
 * Console val with log level into stdout
 * @param val the printing string
 * @return void
 * @example [LOG] tea console example
 */
func Log(val *string) {
	fmt.Printf("[LOG] %s\n", tea.StringValue(val))
}

/**
 * Console val with info level into stdout
 * @param val the printing string
 * @return void
 * @example [INFO] tea console example
 */
func Info(val *string) {
	fmt.Printf("[INFO] %s\n", tea.StringValue(val))
}

/**
 * Console val with warning level into stdout
 * @param val the printing string
 * @return void
 * @example [WARNING] tea console example
 */
func Warning(val *string) {
	fmt.Printf("[WARNING] %s\n", tea.StringValue(val))
}

/**
 * Console val with debug level into stdout
 * @param val the printing string
 * @return void
 * @example [DEBUG] tea console example
 */
func Debug(val *string) {
	fmt.Printf("[DEBUG] %s\n", tea.StringValue(val))
}

/**
 * Console val with error level into stderr
 * @param val the printing string
 * @return void
 * @example [ERROR] tea console example
 */
func Error(val *string) {
	fmt.Fprintf(os.Stderr, "[ERROR] %s\n", tea.StringValue(val))
}
