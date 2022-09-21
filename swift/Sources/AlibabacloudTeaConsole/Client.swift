import Foundation

open class Client {
    public static func log(_ val: String?) -> Void {
        print("[LOG] \(val ?? "")")
    }

    public static func info(_ val: String?) -> Void {
        print("[INFO] \(val ?? "")")
    }

    public static func warning(_ val: String?) -> Void {
        print("[WARNING] \(val ?? "")")
    }

    public static func debug(_ val: String?) -> Void {
        print("[DEBUG] \(val ?? "")")
    }

    public static func error(_ val: String?) -> Void {
        print("[ERROR] \(val ?? "")")
    }
}
