import createVector from "../createVector";

describe("Трёхмерные векторы", () => {
    test("строковое представление", () => {
        const v = new createVector(1, 2, 3);
        expect(v.toString()).toBe("(1;2;3)");
    });

    test("вычисляет длину вектора", () => {
        const v1 = new createVector(0, 0, 0);
        const v2 = new createVector(1, 2, 2);
        expect(v1.getLength()).toBe(0);
        expect(v2.getLength()).toBe(3);
    });

    test("складывает векторы", () => {
        const v1 = new createVector(1, 2, 3);
        const v2 = new createVector(3, 2, 1);
        const sum = v1.add(v2);
        expect(sum.toString()).toBe("(4;4;4)");
    });

    test("вычитает векторы", () => {
        const v1 = new createVector(1, 2, 3);
        const v2 = new createVector(3, 2, 1);
        const diff = v1.sub(v2);
        expect(diff.toString()).toBe("(-2;0;2)");
    });

    test("умножает вектор на число", () => {
        const v = new createVector(1, 2, 3);
        const multiplied = v.product(2);
        expect(multiplied.toString()).toBe("(2;4;6)");
    });

    test("вычисляет скалярное произведение", () => {
        const v1 = new createVector(1, 2, 3);
        const v2 = new createVector(3, 2, 1);
        expect(v1.scalarProduct(v2)).toBe(10);
    });

    test("вычисляет векторное произведение", () => {
        const v1 = new createVector(1, 0, 0);
        const v2 = new createVector(0, 1, 0);
        const cross = v1.vectorProduct(v2);
        expect(cross.toString()).toBe("(0;0;1)");
    });
});