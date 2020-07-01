// This file is auto-generated, don't edit it
/**
 * This is a console module
 */
import * as $tea from '@alicloud/tea-typescript';


export default class Client {

  /**
   * Console val with log level
   * @param val the printing string
   * @return void
   * @example [LOG] tea console example
   */
  static log(val: string): void {
    console.log('[LOG] ' + val);
  }

  /**
   * Console val with info level
   * @param val the printing string
   * @return void
   * @example [INFO] tea console example
   */
  static info(val: string): void {
    console.log('[INFO] ' + val);
  }

  /**
   * Console val with warning level
   * @param val the printing string
   * @return void
   * @example [WARNING] tea console example
   */
  static warning(val: string): void {
    console.log('[WARNING] ' + val);
  }

  /**
   * Console val with debug level 
   * @param val the printing string
   * @return void
   * @example [DEBUG] tea console example
   */
  static debug(val: string): void {
    console.log('[DEBUG] ' + val);
  }

  /**
   * Console val with error level 
   * @param val the printing string
   * @return void
   * @example [ERROR] tea console example
   */
  static error(val: string): void {
    console.log('[ERROR] ' + val);
  }

}
