# PHP Traits – Examples & Scenarios

## Introduction
PHP Traits are a mechanism for code reuse, introduced in PHP 5.4.  
They allow developers to share methods and properties across multiple classes without using inheritance.

This repository contains **8 examples**, starting from the basics and moving to more advanced scenarios.

---

## 1. Basic Example
A simple demonstration of how a single trait can be used in a class.  
👉 [View code](examples/basic_example/)

---

## 2. Multiple Traits Example
Shows how multiple traits can be combined in a single class.  
👉 [View code](examples/multiple_traits/)

---

## 3. Conflict Example
When two traits define the same method, we can resolve the conflict with `insteadof` and `as`.  
👉 [View code](examples/conflict_resolution/)

---

## 4. Abstract Example
Traits can define **properties** and **abstract methods**, requiring classes to implement specific logic.  
👉 [View code](examples/abstract_example/)

---

## 5. Nested Example
Traits can use other traits, making them composable building blocks.  
👉 [View code](examples/nested_example/)

---

## 6. Visibility Example
Using the `as` keyword, we can change the visibility of trait methods (e.g., make them protected/private).  
👉 [View code](examples/visibility_example/)

---

## 7. Constructor Example
Traits cannot have constructors called automatically, but they can define initialization methods that the class calls in its constructor.  
👉 [View code](examples/constructor_example/)

---

## 8. Interface Example
Traits do not replace interfaces.  
A class can implement an interface and reuse code from a trait to provide the implementation.  
👉 [View code](examples/interface_example/)

---

## Conclusion
Traits are a powerful feature in PHP that helps keep code **DRY**, modular, and maintainable.  
They are best used with care, as a complement to inheritance and interfaces.  
This repository demonstrates both basic and advanced usage scenarios.

P.L.
